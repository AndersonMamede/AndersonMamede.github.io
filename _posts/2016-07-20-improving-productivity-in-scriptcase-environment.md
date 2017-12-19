---
layout: post
date: 2016-07-20 21:51:22
title: "Improving productivity in ScriptCase environment"
tags:
- scriptcase
- productivity
- extension
- github
- personal project
---

> The most efficient web development environment.<br>
> Create your web solutions in a fast and innovative way, reducing the development time in up to 80%.

That is how its own [official page](http://www.scriptcase.net/){:target="_blank"} describes **ScriptCase**, a [Rapid Application Development](https://en.wikipedia.org/wiki/Rapid_application_development){:target="_blank" rel="nofollow"} (RAD) platform written in PHP.

In spite of having some (many) problems, **ScriptCase** sufficiently fulfills what it's up to: a tool to create **web applications** using PHP and JavaScript, integrating multiple different databases (e.g. MySQL, SQL Server, PostgreSQL) in a very fast way and providing utilities like forms, grids, searches, reports, charts, internacionalization, export data to PDF/XLS/CSV, and many other options. Although ScriptCase provides all these benefits, **some (not so) small details in its environment are very frustrating**.

I used to work with [Sublime Text](https://www.sublimetext.com/){:target="_blank"} editor and there I could **customize it completely** and also use plugins for just about everything, from shortcut keys to autocompletes, snippets, FTP, versioning and revision control system, documentation, and the list goes on. But all these facilities **are gone** in ScriptCase.
<br><br>

## The problem
ScriptCase has its own [IDE](https://en.wikipedia.org/wiki/Integrated_development_environment){:target="_blank" rel="nofollow"} and the code editor is **[CodeMirror](https://codemirror.net/){:target="_blank" rel="nofollow"} with only search and replace functions**. That's not even the basics:

* There's **no autocomplete**
* There's **no shotcut keys** (!!)
* For saving your code you must use **mouse** to click the Save button, which is placed in the top of the IDE
* And quite often you **misclick** a button in the top toolbar just because it's placed right under the menu, which opens when you mouse over it
* The code editor is always reloaded after you save your code, thus **removing the focus from the editor and losing cursor and scroll position**; that forces you to always search where you were before
* and many other details that make you waste a lot of time and decrease the productivity
<br><br>

## Solution
Unfortunately there's no way to integrate ScriptCase with another IDE or external editor, neither change its source code. But here is the solution I found: **create a browser extension** which, working with ScriptCase's internal functions, solves some of these problems. And that's why I created the extension [**ScriptCase Tools**](https://goo.gl/i4LtVl){:target="_blank"}.
<br><br>

## ScriptCase Tools
The purpose of **ScriptCase Tools** is very simple: **improve usability** of ScriptCase's development environment **adding** (and some times **removing**) functionalities in its IDE.

I created this extension using **HTML/CSS/JavaScript**, some [browser APIs](https://developer.chrome.com/extensions/api_index){:target="_blank" rel="nofollow"}, some of ScriptCase's internal functions (JavaScript) and [localStorage API](https://developer.mozilla.org/pt-BR/docs/Web/API/Window/Window.localStorage){:target="_blank" rel="nofollow"} to store user preferences.
<br><br>

Here is a printscreen showing the **available options** in ScriptCase Tools **v0.2**:
![ScriptCase Tools options]({{ site.url }}/images/scriptcase-tools-v0.2.png)

## Installing, contributing and more
The **easiest way to install** ScriptCase Tools is getting the official release available at [**Chrome Web Store**](https://goo.gl/i4LtVl){:target="_blank"}.

Instructions for manual installation or information about the latest releases are available at its [**official repository**](https://github.com/AndersonMamede/scriptcase-tools){:target="_blank"}. There you can also see all its **source code**, **contribute** in development, send **suggestions**, ask questions, report bugs and get more information.

Contact can also be made through this page or via e-mail to [mamede.anderson@gmail.com](mailto:mamede.anderson@gmail.com){:target="_blank"}.
