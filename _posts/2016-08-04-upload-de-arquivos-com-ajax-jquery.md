---
layout: post
title: "Upload de arquivos com AJAX (+jQuery)"
date: 2016-08-04 22:05:18
---

Até algum tempo atrás não havia uma forma para se fazer **upload de arquivos com AJAX** e que funcionasse nos **browsers mais recentes** sem ter que que escrever códigos diferentes para browsers específicos.

A maneira mais comum de upload era utilizar um formulário com submit para uma página, que então faria o tratamento necessário no arquivo e o salvaria na pasta correta (ou em banco de dados). Uma outra opção era utilizar um intermediário em Flash, como era feito em alguns plugins disponíveis na época.

Com a chegada do **HTML5** e de **novas APIs disponibilizadas para o JavaScript**, o upload de arquivos (imagens, documentos, PDF, etc) com AJAX se tornou **muito simples**. Com algumas poucas linhas de JavaScript é possível fazer o upload. A "nova" API que possibilita o upload com AJAX de forma bem simples é a [API FormData](https://developer.mozilla.org/pt-BR/docs/Web/API/FormData){:target="blank" rel="nofollow"}.

## FormData {#formdata}

FormData é basicamente uma interface que disponibiliza uma forma fácil de construir um conjunto de dados, cada qual em sua chave, representando um formulário com seus campos e valores.

É possível criar um objeto do FormData vazio ou mesmo informar no momento da criação (construtor) um elemento form, que terá seus campos e valores "copiados" para o novo objeto:

```javascript
// Desta forma o objeto estará vazio (sem nenhum valor)
var formData = new FormData();

// Desta forma os campos dentro do elemento "formulario" serão
// copiados para o objeto
var formData = new FormData(document.getElementById("formulario"));
```

Também é possível adicionar valores ao formData posteriormente, independente do objeto ter sido criado vazio ou não. Para tal, é utilizado o método append:

```javascript
// Adiciona mais um valor ao objeto formData
formData.append("email", "test@email.com");
```

Bem simples, né? Existem outros métodos do FormData para se trabalhar, como pode ser conferido na [documentação do FormData](https://developer.mozilla.org/pt-BR/docs/Web/API/FormData){:target="blank" rel="nofollow"}.

## Upload com AJAX {#upload-com-ajax}

Uma demonstração do [upload de arquivos com AJAX]({{ site.url }}/demo/upload-de-arquivos-com-ajax-jquery/){:target="_blank"} está disponível para testes.

Segue abaixo o código completo do upload usando a API FormData. Note que a implementação está bem simples, e o motivo é para que seja fácil de você adaptar à sua página.

Observações:

* Nesta implementação foi utilizada a biblioteca jQuery para fazer a requisição AJAX. Você pode trocá-la por qualquer outra de sua preferência ou mesmo fazer a [requisição com JavaScript puro](http://www.quirksmode.org/js/xmlhttp.html){:target="_blank" rel="nofollow"}.

* Caso sua página que recebe a requisição AJAX seja em PHP, os dados do formulário estarão armazenados na variável [$_POST](http://php.net/manual/pt_BR/reserved.variables.post.php){:target="_blank" rel="nofollow"} e o arquivo estará na variável [$_FILES](http://php.net/manual/pt_BR/reserved.variables.files.php){:target="_blank" rel="nofollow"}.
<br><br>

```html
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Demonstração do upload de arquivos com AJAX e jQuery</title>
	</head>
	<body>
		<i>Esta página serve como demonstração do artigo <b><a href="http://blog.andersonmamede.com.br/upload-de-arquivos-com-ajax-e-jquery/">Upload de arquivos com AJAX e jQuery</a></b>.</i><br><br>
		<form id="form-demo" onsubmit="return false">
			<input type="file" id="arquivo" name="arquivo"><br><br>
			<button id="button-send">Enviar</button>
		</form>
		<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>
			/*
			 * Para efeito de demonstração, a implementação foi toda incorporada
			 * no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
			$("#button-send").click(sendFormData);
			
			function sendFormData(){
				// Utiliza a API FormData, passando o formulário como parâmetro.
				// Será criada um objeto do FormData, com todos os dados existentes
				// no formulário (inclusive com o arquivo para upload!)
				var formData = new FormData($("#form-demo").get(0));
				
				// Página que vai receber os dados e o arquivo da requisição.
				// Deixei "processa-upload.php" apenas para exemplo, e deve ser alterado
				// para o caminho do arquivo que fará o tratamento dos dados e do upload;
				// Caso seja uma página PHP, os dados dos campos estarão disponíveis na
				// variável $_POST e o arquivo estará disponível na variável $_FILES
				var ajaxUrl = "processa-upload.php";
				
				$.ajax({
					url : ajaxUrl,
					type : "POST",
					data : formData,
					// ambos os parâmetros 'contentType' e 'processData' são
					// são CRUCIAIS para que o formulário (upload) seja enviado corretamente
					contentType : false,
					processData : false
				}).done(function(response){
					// Aqui deve ser verificado o retorno do AJAX, se houve algum erro para
					// fazer tratamento e executar rotinas pós upload...
				}).fail(function(){
					// Aqui devem ser feitos os tratamentos de erros da requisição
				}).always(function(){
					alert("Requisição AJAX finalizada!");
				});
			}
		</script>
	</body>
</html>
```

## Compatibilidade

A compatibilidade da API FormData com os browsers pode ser verificada no final da [documentação](https://developer.mozilla.org/pt-BR/docs/Web/API/FormData){:target="_blank" rel="nofollow"}.

## Extra

Caso você esteja implementado upload de imagens/fotos, veja o artigo anterior, onde eu ensino como criar um "[Preview de imagem antes do upload (pré-visualização)]"({{ site.url }}/preview-de-imagem-antes-do-upload-pre-visualizacao/){:target="_blank"}.
