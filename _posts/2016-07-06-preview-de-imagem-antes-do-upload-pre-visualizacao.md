---
layout: post
date: 2016-07-06 21:08:47
title: "Preview de imagem antes do upload (pré-visualização)"
tags:
- javascript
- usabilidade
---

A **pré-visualização de arquivos (preview)**, ou seja, visualizar o conteúdo do arquivo antes de enviá-lo para o servidor e fazer upload, principalmente para imagens, é uma funcionalidade muito interessante para o usuário e é bem simples de implementar.

É possível utilizar a pré-visualização inclusive em páginas e sistemas baseados totalmente em AJAX, já que a implementação do preview pode ser feita **usando JavaScript e não depende de processamento no servidor**. E se este for o seu caso (site/sistema em AJAX), você pode fazer o upload do arquivo usando a API FormData, a qual falarei sobre no próximo artigo.

Voltando para a **pré-visualização de imagem**, vamos implementá-la usando JavaScript e seguindo estes passos:

1 - utilizamos o **evento onchange** para saber quando o usuário selecionou um arquivo;

2 - quando um arquivo for selecionado, fazemos **algumas validações** (se é realmente uma imagem e se o navegador suporta a funcionalidade);

3 - se as validações passarem, então carregamos o conteúdo do arquivo no elemento IMG (ou seja, a pré-visualização) utilizando a [**API FileReader**](https://developer.mozilla.org/pt-BR/docs/Web/API/FileReader){:target="blank"};

* A [API FileReader](https://developer.mozilla.org/pt-BR/docs/Web/API/FileReader){:target="blank"} nos permite ler conteúdo de arquivos que estejam armazenados no computador do usuário e é suportada nos navegadores mais atuais. Veja a [tabela detalhada de compatibilidade](http://caniuse.com/#feat=filereader){:target="blank"}.

Uma **demonstração** do [preview de imagem antes do upload]({{ site.url }}/exemplo/preview-de-imagem-antes-do-upload-pre-visualizacao/){:target="blank"} está disponível para testes.

Segue abaixo a implementação do preview.

```html
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pré-visualização de upload de imagem (preview) / Demonstração</title>
	</head>
	<body>
		<form>
			<img id="imagem" src="placeholder.png"><br>
			<input id="arquivo" name="arquivo" type="file" accept="image/*">
		</form>
		<script>
			/*
			 * Para efeito de demonstração, o JavaScript foi
			 * incorporado no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			(function(){
				var $imagem = document.querySelector("#imagem");
				var $arquivo = document.querySelector("#arquivo");
				
				// Evento para atualizar o elemento img de acordo com a imagem selecionada
				document.querySelector("#arquivo").onchange = function(){
					if(this.value){
						showImagePreview(this.files[0]);
					}else{
						resetImage();
					}
				};
				
				// Atualiza o elemento img com a pré-visualização da imagem  selecionada
				function showImagePreview(file){
					if(!checkImageFile(file) || !checkBrowserSupport()){
						return;
					}
					
					// Coloca a imagem selecionada como pré-visualização
					var reader = new FileReader();
					
					reader.onload = function(e){
						$imagem.src = e.target.result;
					};
					
					reader.readAsDataURL(file);
				}
				
				// Reseta a imagem selecionada (volta a imagem de placeholder)
				function resetImage(){
					$imagem.src = "placeholder.png";
					$arquivo.value = "";
				}
				
				// Verifica se o arquivo selecionado é realmente uma imagem
				function checkImageFile(file){
					if(!file.type.match(/^image\//)){
						alert("O arquivo não é uma imagem!");
						resetImage();
						return false;
					}
					
					return true;
				}
				
				// Verifica se o browser do usuário suporta a pré-visualização de imagens
				function checkBrowserSupport(){
					if(typeof FileReader != "function"){
						alert("Seu browser não suporta a pré-visualização de imagens.");
						return;
					}
					
					return true;
				}
			})();
		</script>
	</body>
</html>
```
