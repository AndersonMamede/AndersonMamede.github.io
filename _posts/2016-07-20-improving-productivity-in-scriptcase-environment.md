---
layout: post
date: 2016-07-20 21:51:22
title: "Improving productivity in ScriptCase environment"
tags:
- scriptcase
- productivity
- extension
---

> The most efficient web development environment.
> Create your web solutions in a fast and innovative way, reducing the development time in up to 80%.

This is how its own [official page](http://www.scriptcase.net/){:target="_blank" rel="nofollow"} defines the **ScriptCase**, a [Rapid Application Development](https://en.wikipedia.org/wiki/Rapid_application_development){:target="_blank" rel="nofollow"} (RAD) platform written in PHP.

In spite of having some (many) problems, **ScriptCase** sufficiently fulfills what it's up to: create **web applications** using PHP and JavaScript, integrating multiple different databases (e.g. MySQL, SQL Server, PostgreSQL) in a very fast way and providing functionalities like forms, grids, searches, reports, charts, internacionalization, exporting data to PDF/XLS/CSV, and many other options. Although all these benefits, **some (not so) small details had me unsatisfied**.

I used to work with [Sublime Text](https://www.sublimetext.com/){:target="_blank" rel="nofollow"} editor and there I could **customize it completely** and also use plugins for just about everything, from shortcut keys to autocompletes, snippets, FTP, versioning and revision control system, documentation, and the list goes on. With ScriptCase, all these facilities that improve productivity, **have gone away**.

### The problem

ScriptCase has its own [IDE](https://en.wikipedia.org/wiki/Integrated_development_environment){:target="_blank" rel="nofollow"} and its code editor is [CodeMirror](https://codemirror.net/){:target="_blank" rel="nofollow"} with **just search/replace functions enabled**. It's not even the basics:

* No **autocomplete**
* No **shotcut keys** (!!)
* To save your code you have to use **mouse** to click the Save button placed in the top of the IDE
* Quite often you **misclick** a button in the top toolbar just because it's placed right under the menu which opens when you mouse over it.
* Code editor is always reloaded after you save the code, thus **removing the focus from the editor and losing cursor and scroll position**; that forces you to search where you were before (in your code)
* and many other details that make you waste a lot of time and decrease the productivity

### Solution

Unfortunately there's no way to integrate ScriptCase with another IDE or external editor, neither change its source code. But here is the solution I found: **creating a browser extension** which, working with ScriptCase's internal functions, resolves some of these problems. And that's why the extension [**ScriptCase Tools**](https://goo.gl/i4LtVl){:target="_blank"} was created.

### The ScriptCase Tools extension

The purpose of **ScriptCase Tools** is very simple: **improve usability** of ScriptCase's development environment **adding** and some times **removing** functionalities in its IDE.

I created this extension using **HTML/CSS/JavaScript**, some [browser APIs](https://developer.chrome.com/extensions/api_index){:target="_blank" rel="nofollow"}, some of ScriptCase's internal functions (JavaScript) and [localStorage API](https://developer.mozilla.org/pt-BR/docs/Web/API/Window/Window.localStorage){:target="_blank" rel="nofollow"} to store user preferences.

Here is a **printscreen** showing the **available options** in ScriptCase Tools **v0.2**:

![ScriptCase Tools options]({{ site.url }}/images/scriptcase-tools-v0.2.png)

### Installing, contributing and more

The easiest way to install ScriptCase Tools is getting the official release available at [Chrome Web Store](https://goo.gl/i4LtVl){:target="_blank"}.

Instructions for manual installation or about the latest releases are available at [**its official repository**](github.com/AndersonMamede/scriptcase-tools){:target="_blank"}. There you can also **see all its source code**, **contribute in development**, **suggest new functionalities**, ask questions, report bugs and get more information.

Contact can also be made through this page or via e-mail to [mamede.anderson@gmail.com](mailto:mamede.anderson@gmail.com){:target="_blank"}.
