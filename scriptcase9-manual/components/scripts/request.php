<?php

/**
*
* @Author: Ronyan Alves
* @Date: 21 Mar 2017
* @Url: r.alves@scriptcase.net
*
**/
$arr_data = array();
if(isset($_GET['texto'])){
  $conteudo = mb_strtolower($_GET['texto']);
  $semFormato = $_GET['texto'];
  $semAcento = removeAcentos(utf8_decode($conteudo));
  $arr_data['error'][0] = '0';
}else if(isset($_POST['texto'])){
  $conteudo = mb_strtolower($_POST['texto']);
  $semFormato = $_POST['texto'];
  $semAcento = removeAcentos(utf8_decode($conteudo));
  $arr_data['error'][0] = '0';
}else{
  $arr_data['error'][0] = 'Fornceça uma variavel GET ou POST';
}
$fp = fopen('indexes.tpl','r');
while(!feof($fp)){
  $content  = fgets($fp,4096);
  $findme   = $conteudo;
  $pos    = strpos($content, $findme);
  $findme_sem  = $semFormato;
  $pos_sem    = strpos($content, $findme_sem);
  $findme_ac  = $semAcento;
  $pos_ac   = strpos($content, $findme_ac);
  if ($pos !== false || $pos_sem !== false || $pos_ac !== false) {
    if($content!="" || $content!=null){
      $arr = explode(' => ',$content);
      $label[] = $arr[0];
      $links[] = $arr[1];
      $label_lower[] = trim(preg_replace('/\s\s+/', ' ', removeAcentos(utf8_decode(mb_strtolower($arr[2])))));
      if(isset($arr[3])){
        $label_title[] = $arr[3];
      }
      $vazio = 1;
    }
  }
}
fclose($fp);
$label_category = array_unique($label_lower);
$include   = '/_includes';
$view      = '01-ge';
foreach($label_lower as $key => $values){
    $arr_links = explode('/',$links[$key]);
    $final = end($arr_links);
    $arr_links[$key] = str_replace($final,'',$links[$key]);
    $pos_inc   = strpos($arr_links[$key], $include);
    $pos_view  = strpos($arr_links[$key], $view);
    
    if($pos_view !== false){
        $arr = explode("/",$arr_links[$key]);
        $links_new[$conteudo][$values][] = "<a class='link' href='".$links[$key]."' >". ucfirst(trim(preg_replace('#[0-9 ]*-#', '', $arr[2]))). '</a>';
    }else if ($pos_inc === false) {
      $arr = explode("/",$arr_links[$key]);
      $qtd = count($arr);
      $arr_second = explode("-",$arr[$qtd-2]);
      $second = end($arr_second);
      $first  = $arr_second[0];
      if(trim($second) == 'n' || trim($first) =='n'){
        $second = ucfirst(preg_replace('#[0-9 ]*-#', ' ',substr($arr[$qtd-2], 3)));
      }
      $links_new[$conteudo][$values][] = "<a class='link' href='".$links[$key]."' >".ucfirst(trim(preg_replace('#[0-9 ]*-#', ' ', preg_replace('#[0-9 ]*#', '', $arr[$qtd-3])))).' - '.ucwords($second). '</a>';
    }
  $arr_data['error'][1] = '0';
}
$json_content = "";
if(isset($vazio)){
foreach($links_new as $k_links => $link){
      foreach($link as $k_link => $sublink){
          $json_content .=  "<li class ><a href='#'>".ucfirst($k_link).'</a><ul>';
          $sublinkU = array_unique($sublink);
          foreach($sublinkU as $k_sublink => $url ){
             $json_content .=  "<li>".$url."</li>";
          }
          $json_content .=  "</ul></li>";
      }
}
}else{
  $arr_data['error'][1] = 'Empty search.';
}
$arr_data['main_menu'][0] = $json_content;
if (version_compare(phpversion(), '5.4.0', '<')) {
     $final_data = json_encode( $arr_data );
 }else{
     $final_data = json_encode( $arr_data, JSON_UNESCAPED_SLASHES );  
 }

echo $final_data;
/**
*
* @Author: Thiago Belem
* @Date: 18 Sep 2009
* @Url: http://blog.thiagobelem.net/removendo-acentos-de-uma-string-urls-amigaveis
*
**/
function removeAcentos($string, $slug = false) {
  $string = strtolower($string);
  // Código ASCII das vogais
  $ascii['a'] = range(224, 230);
  $ascii['e'] = range(232, 235);
  $ascii['i'] = range(236, 239);
  $ascii['o'] = array_merge(range(242, 246), array(240, 248));
  $ascii['u'] = range(249, 252);
  // Código ASCII dos outros caracteres
  $ascii['b'] = array(223);
  $ascii['c'] = array(231);
  $ascii['d'] = array(208);
  $ascii['n'] = array(241);
  $ascii['y'] = array(253, 255);
  foreach ($ascii as $key=>$item) {
    $acentos = '';
    foreach ($item AS $codigo) $acentos .= chr($codigo);
    $troca[$key] = '/['.$acentos.']/i';
  }
  $string = preg_replace(array_values($troca), array_keys($troca), $string);
  // Slug?
  if ($slug) {
    // Troca tudo que não for letra ou número por um caractere ($slug)
    $string = preg_replace('/[^a-z0-9]/i', $slug, $string);
    // Tira os caracteres ($slug) repetidos
    $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
    $string = trim($string, $slug);
  }
  return $string;
}
?>