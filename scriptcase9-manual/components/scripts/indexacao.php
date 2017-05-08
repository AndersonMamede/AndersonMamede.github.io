<?php

/**
 *
 * @Author: Ronyan Alves
 * @Date: 21 Mar 2017
 * @Url: r.alves@scriptcase.net
 *
 **/

$manual_dir_jk = $_SERVER['DOCUMENT_ROOT'].'/manual/en_us/_manual/';
$manual_dir_html = $_SERVER['DOCUMENT_ROOT'].'/manual/en_us/_site/';
$include_dir_jk = $_SERVER['DOCUMENT_ROOT'].'/manual/en_us/_includes/docs/';
function getDirContents($manual_dir_jk, &$results = array()){
    $files = array_diff(scandir($manual_dir_jk),array('..', '.','.DS_Store','..DS_Store','._.DS_Store'));
    foreach($files as $key => $value){
        $path = realpath($manual_dir_jk.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != ".." ) {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }
    return $results;
}
$result = getDirContents($manual_dir_jk);
foreach($result as $key => $value ){
    if(!is_dir($value)){
        $files[]    = $value;
    }
}

$qtd_includes = count($files);
$dir_include = getDirContents($include_dir_jk);
foreach($dir_include as $key => $value){
    if(!is_dir($value)){
        $files[$qtd_includes] = $value;
        $qtd_includes++;
    }
}




foreach($files as $key => $arquivos ){
    $farq = fopen($arquivos,'r');
    while(!feof($farq)){
        $content = fgets($farq,4096);
        $findme   = '#';
        $pos = strpos($content, $findme);
        if ($pos !== false) {
            $content = trim(str_replace('-'," ",str_replace("#","",strip_tags($content))));
            $replace = substr($content,strpos($content,"{"),strrpos($content,'}'));
            $content = str_replace($replace,"",$content);
            $replace = substr($content,strpos($content,"["),strrpos($content,']:'));
            $content = trim(str_replace($replace,"",$content));
            $content = str_replace("__","",$content);
            $content = str_replace("]: ","",$content);
            $arquivos = str_replace('_manual','manual',$arquivos);
            $arquivos = str_replace('components/scripts/indexacao.php',$_SERVER['SCRIPT_FILENAME'].'/',$arquivos);
            $arquivos = str_replace($_SERVER['DOCUMENT_ROOT'],'',$arquivos);
            $arquivos = str_replace('.md','/index.html',$arquivos);
            //$arquivos = str_replace('/scriptcase','../../..',$arquivos);
            $arquivos = str_replace('/manual/en_us','',$arquivos);
            $findme   = '| h:i:s';
            $findme1  = 'include "';
            $pos      = strpos($content, $findme);
            $pos1     = strpos($content, $findme1);
            if ($pos !== false) {

            }else if($pos1 !== false){

            }else{
                $conteudo[] = $content. ' => '.$arquivos.' => '.strtolower($content);
            }
        }
    }
}

foreach($conteudo as $key => $dir){
    $find = '/_includes/';
    $pos  = strpos($dir,$find);
    if($pos !== false){
        $arr_dir = explode(' => ',$dir);
        $link[$key] = $arr_dir[1];
        $label[$key] = $arr_dir[0];
    }
}
$aux="";
$aux_str="";
$aux_label = "";
$aux_new_file= "";
$qtd = count($conteudo);
foreach($link as $key => $file){
    $str_inc = str_replace('/_includes/',"",str_replace('/index.html','.md',$file));
    //echo $label[$key] .' => '.$str_inc.' <br> ';
    unset($conteudo[$key]);
    foreach($files as $k => $file){
        $fp = fopen($file,'r');
        while(!feof($fp)){
            $content = fgets($fp,4096);
            $find_title = 'title:';
            $pos_title = strpos($content,$find_title);
            if($pos_title !== false){
                $title = ' => '.str_replace('title:','',$content);
            }else{
                if(!isset($title)){
                    $title="";
                }
            }
            $find = $str_inc;
            $pos = strpos($content,$find);
            if($pos !== false){
                if($aux!=$file){

                    if($content != null || $content !=""){
                        $new_file = str_replace('.md','/index.html',str_replace('/manual/en_us','',str_replace($_SERVER['DOCUMENT_ROOT'],'',str_replace('_manual','manual',$file))));
                        if($new_file == '/_includes/docs/macros/includemacro/index.html'){
                            $new_file = '/manual/14-macros/01-general-view/index.html';
                        }
                        //echo 'new '.$label[$key] .' => '.$new_file.'<br>';
                        $conteudo[$qtd] = $label[$key].' => '.$new_file.' => '.strtolower($label[$key]).$title;
                        $aux = $file;
                        $aux_str = $str_inc;
                        $aux_label = $label[$key];
                        $qtd++;
                    }
                }else{
                    if(isset($new_file)){
                        if($new_file == '/manual/14-macros/01-general-view/index.html'){
                            //echo 'new '.$label[$key] .' => '.$new_file.'<br>';
                            $conteudo[$qtd] = $label[$key].' => '.$new_file.' => '.strtolower($label[$key]).$title;
                            $qtd++;
                        }else if($new_file =='/manual/11-options/02-settings/index.html'){
                            //echo 'new '.$label[$key] .' => '.$new_file.'<br>';
                            $conteudo[$qtd] = $label[$key].' => '.$new_file.' => '.strtolower($label[$key]).$title;
                            $qtd++;
                        }else if($new_file=='/manual/10-modules/02-security-module/index.html'){
                            //echo 'new '.$label[$key] .' => '.$new_file.'<br>';
                            $conteudo[$qtd] = $label[$key].' => '.$new_file.' => '.strtolower($label[$key]).$title;
                            $qtd++;
                        }
                    }
                }
            }
        }
    }
    //echo "<br>";
}


fclose($farq);
$file = $_SERVER['DOCUMENT_ROOT'].'/manual/en_us/components/scripts/indexes.tpl';
if(is_file($file)){
    $fp = fopen($file,'w');
}else{
    $fp = fopen($file,'w');
}
$conteudo_unique=array();
$conteudo_unique = array_unique($conteudo);
foreach($conteudo_unique as $key => $content){
    fwrite($fp,$content." \n ");
}
fclose($fp);

echo "<a href='http://192.168.254.188:8090/manual/en_us/components/scripts/indexes.tpl' target='blank'>Arquivo Criado</a>";








?>