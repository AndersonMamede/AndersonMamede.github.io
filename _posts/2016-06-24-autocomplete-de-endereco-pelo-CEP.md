---
layout: post
title: "Simples autocomplete de endereço pelo CEP"
date: 2016-06-24 18:22:05
---

Se você já preencheu formulários de cadastros pela internet (quem nunca?!), já deve estar enjoado de preencher os mesmos campos. Além de chato e demorado, formulários longos também aumentam a taxa de rejeição de seu site. Quanto mais campos o usuário tiver que preencher, maiores são as chances dele desistir.

Uma das formas de diminuir o trabalho de preenchimento de formulário e consequentemente melhorar a experiência do usuário e diminuir a taxa de rejeição, é utilizando **autocomplete**. Ou seja: o usuário preenche uma informação e o site/sistema faz o máximo possível para completar o restante.

No nosso caso, vamos diminuir o trabalho de preenchimento do endereço implementando a funcionalidade de **autocomplete através do CEP**. Quando o usuário informar o **CEP**, nossa página vai carregar automaticamente os outros dados (**estado, cidade, bairro e logradouro**).

Segue abaixo uma implementação simples (mas completa) e que você pode facilmente adaptar em seu formulário.

Caso queira, você pode ver o [resultado da implementação do autocomplete usando o CEP]({{ site.url }}/exemplo/autocomplete-de-endereco-pelo-CEP/){:target="_blank"}.

Observações:

* A pesquisa do CEP é feita em um [web service](https://pt.wikipedia.org/wiki/Web_service){:target="_blank"} gratuito chamado [ViaCEP](http://viacep.com.br/ "Web service para consulta de endereço via CEP"){:target="_blank"}, desta forma você não precisa ter um banco de dados apenas para armazenar os CEP/endereços.

* Para fazer a pesquisa no web service (AJAX) foi utilizada a biblioteca jQuery. Se preferir, você pode trocá-la por qualquer outra de sua preferência.

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Demonstraçao de autocomplete de endereço através do CEP</title>
	</head>
	<body>
		<form action="#" onsubmit="return false">
			CEP: <input type="text" id="cep" maxlength="9" placeholder="13483-000" autofocus><br><br>
			UF: <input type="text" id="uf"><br>
			Cidade: <input type="text" id="cidade"><br>
			Bairro: <input type="text" id="bairro"><br>
			Endereço: <input type="text" id="endereco">
		</form>
		<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>
			/*
			 * Para efeito de demonstração, a implementação do autocomplete foi
			 * incorporada no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
			// Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
			// quando o usuário sair do campo "cep"
			$("#cep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}
				
				// A url de pesquisa consiste no endereço do webservice + o cep que
				// o usuário informou + o tipo de retorno desejado (entre "json",
				// "xml", "piped" ou "querty")
				var url = "http://viacep.com.br/ws/"+cep+"/json/";
				
				// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
				// caso ocorra algum erro (o cep pode não existir, por exemplo) a
				// usabilidade não seja afetada, assim o usuário pode continuar//
				// preenchendo os campos normalmente
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
		</script>
	</body>
</html>
```
