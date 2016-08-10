---
layout: post
date: 2016-07-20 21:51:22
title: "Aumentando a produtividade no ScriptCase"
tags:
- scriptcase
- produtividade
- extensão
---

> O mais eficiente ambiente de desenvolvimento web.
> Crie suas soluções de forma rápida e inovadora reduzindo o tempo de desenvolvimento em até 80%.

Assim é definido o **ScriptCase**, uma plataforma de [Desenvolvimento Rápido de Aplicação](https://pt.wikipedia.org/wiki/Desenvolvimento_r%C3%A1pido_de_aplica%C3%A7%C3%B5es){:target="_blank" rel="nofollow"} (ou RAD - Rapid Application Development) em PHP, em seu [site oficial](http://www.scriptcase.com.br/){:target="_blank"}.

Apesar de alguns (vários) problemas, o **ScriptCase** consegue cumprir de forma bem satisfatória o seu papel: criar **aplicações web** nas linguagens PHP e JavaScript, integrando vários bancos de dados diferentes (MySQL, SQL Server, PostgreSQL, etc) de forma rápida e com opções de formulários, consultas, relatórios, gráficos, internacionalização, exportação de dados, e outras inúmeras opções. Mas apesar de toda a facilidade proporcionada no desenvolvimento, alguns detalhes ainda me deixavam muito insatisfeito.

Eu estava acostumado a trabalhar com o editor [Sublime Text](https://www.sublimetext.com/){:target="_blank" rel="nofollow"}, onde é possível **customizá-lo completamente** e também encontrar praticamente todos os tipos de plugins e funcionalidades, desde teclas de atalhos, vários tipos de autocomplete, snippets, integração com versionamento/ftp, documentação de linguagens, etc. Já no ScriptCase, toda essa facilidade, que aumenta a produtividade, praticamente **não existe**.

### O problema {#o-problema}

O ScriptCase possui seu próprio ambiente de desenvolvimento (IDE), sendo que o editor de código fonte é o [CodeMirror](https://codemirror.net/){:target="_blank" rel="nofollow"} com apenas a função de **search/replace**. Não chega nem a ser o básico:

* Não tem **autocomplete**
* Não tem **teclas de atalhos** (!!)
* Quer salvar o código? Tem que utilizar o **mouse** para clicar em um botão que fica no topo da IDE, que aliás, vez ou outra, há **miss-clicks** em alguma opção diferente do menu por ele ficar muito próximo do botão e ser aberto no mouseover
* Depois de salvar um código, o iframe do editor é recarregado, fazendo com que o **foco do editor e a posição do cursor/scroll sejam perdidos**, te obrigando a toda vez procurar no código onde você estava posicionado antes de salvar
* e vários outros detalhes que acabam fazendo você perder um bom tempo e diminui a produtividade

### A solução {#a-solucao}

Infelizmente não existe maneira de integrar o ScriptCase à uma IDE ou editor externo, tampouco alterar seu código fonte. A solução que encontrei? Criar uma **extensão para o navegador** que, trabalhando com as funções internas do ScriptCase, resolva esses problemas. Daí surgiu a extensão [**ScriptCase Tools**](https://goo.gl/i4LtVl){:target="_blank"}.

### A extensão ScriptCase Tools {#a-extensao-scriptcase-tools}

O objetivo da **extensão ScriptCase Tools** é simples: **melhorar a usabilidade** do ambiente de desenvolvimento do ScriptCase, adicionando (e em alguns casos, removendo) funcionalidades na IDE.

Criei esta extensão usando HTML/CSS/JavaScript, algumas [API's do navegador Chrome](https://developer.chrome.com/extensions/api_index){:target="_blank" rel="nofollow"}, algumas funções internas do ScriptCase e para armazenamento local de configurações usei a API [localStorage](https://developer.mozilla.org/pt-BR/docs/Web/API/Window/Window.localStorage){:target="_blank" rel="nofollow"}.

Segue um printscreen da tela de configuração da extensão, onde é possível ver as funcionalidades disponibilizadas na versão 0.2:

![ScriptCase Tools]({{ site.url }}/images/scriptcase-tools-v0.2.png)

### Instalação, contribuição e outras informações {#instalacao-contribuicao-e-outras-informacoes}

A **instalação** da versão oficial pode ser feita através da [Chrome Web Store](https://goo.gl/i4LtVl){:target="_blank"}. Instruções para instalação manual ou da versão mais atual (beta) estão disponíveis no [**repositório oficial**](github.com/AndersonMamede/scriptcase-tools){:target="_blank"} do ScriptCase Tools.

No [**repositório oficial**](github.com/AndersonMamede/scriptcase-tools){:target="_blank"} você também pode conferir todo o **código fonte** da extensão, além de **contribuir** com o desenvolvimento, enviar **sugestões** de novas funcionalidades, tirar **dúvidas**, reportar bugs e obter mais informações. Contato pode ser feito tanto lá, quanto aqui no site, ou ainda, dependendo do assunto, via e-mail para [mamede.anderson@gmail.com](mailto:mamede.anderson@gmail.com){:target="_blank"}.
