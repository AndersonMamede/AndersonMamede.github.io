---
layout: post
title: "Como verificar se o captcha é válido (no ScriptCase)"
date: 2016-08-01 23:07:22
tags:
- scriptcase
---

Há alguns dias eu precisei implementar um **captcha** em uma aplicação do tipo Controle no **ScriptCase**. Na implementação em si eu não tive problemas, que é bem simples: 

* menu "Controle"
* opção "Segurança"
* na guia "Usar captcha", selecione "Sim"

Mas eu também precisava fazer um controle (log) das tentativas de acesso, e para isso eu tinha que saber o que foi que deu de errado na tentativa do usuário. Podia ser que os campos do formulário não tinham sido preenchidos corretamente, mas podia ser que o captcha tinha sido informado incorretamente. E é o segundo caso, do captcha informado incorretamente, que eu precisava "rastrear".

Numa aplicação do tipo Controle (ou de Formulário) existe o evento [onValidateFailure](http://www.scriptcase.com.br/docs/pt_br/v81/manual_mp.htm#aplicacoes-de-formularios/formularios/eventos/eventos){:target="blank" rel="nofollow"}, que é executado quando a validação do formulário não é bem sucedida. É neste evento que eu poderia obter e gravar a informação de que o captcha estava incorreto. Mas infelizmente o evento onValidateFailure não faz distinção do que ocorreu. Não existe uma forma documentada no ScriptCase de saber o que deu de errado na validação do formulário. Então o jeito foi vasculhar o código do ScriptCase para entender como e onde são feitas as verificações...

## Solução {#solucao}

A solução que encontrei para **checar se o captcha informado está correto** também é bem simples. Verifiquei que o ScriptCase armazena o código correto do captcha na sessão do usuário ($_SESSION), e o código informado pelo usuário na propriedade "captcha_code" do objeto da aplicação ($this). Então basicamente a solução é, no evento **onValidateFailure** da aplicação, verificar se ambos os valores são iguais ou diferentes.

O código final da verificação ficou assim (no evento onValidateFailure):

```php
<?php
$captchaOficial = strToUpper($_SESSION["securimage_code_value"]);
$captchaInformado = strToUpper($this->captcha_code);

if($captchaInformado != $captchaOficial){
	sc_log_add("...");
}
?>
```


**Atenção** a um detalhe: o código do captcha é **case-insensitive**, ou seja, não faz distinção de letras **maiúsculas e minúsculas**. Por isso, antes de verificar se os códigos são iguais, deve ser feita a "normalização" (conversão) para deixá-los no mesmo formato (no meu caso, deixei todos em maiúsculo).

O código em si é simples, mas bem útil para fazer um controle de acesso, como por exemplo criar um log de tentativas de acesso e, se for o caso, também bloquear o usuário caso este esteja agindo de má fé.
