---
layout: post
title: "Creating an extension - Part 1: Quick start with Boilerplate"
date: 2017-12-19 23:17:42
tags:
- boilerplate
- extension
- github
- personal project
---

This is the first part of the two-post series where I'll show how to create a WebExtension for Chrome and Firefox which shows for how long a page has been opened. In this first part I'll show **how to quickly create a brand new extension**; in the second part I'll show **how to code a WebExtension to show the elapsed time**.

# Creating a new extension

Creating a new [WebExtension](https://developer.mozilla.org/en-US/Add-ons/WebExtensions){:target="_blank" rel="nofollow"} is simple. The minimum for the browser to recognize a WebExtension is a file called [manifest.json](https://developer.mozilla.org/en-US/Add-ons/WebExtensions/manifest.json){:target="_blank" rel="nofollow"}. That's where the most important settings are stored (e.g., descriptions, paths, resources, permissions).

But an extension with just that file is not useful because you wouldn't be able to do anything with it but install/uninstall. For the extension to have some actions, commands, buttons, etc, you will need a file/folder structure, some JavaScript/HTML/CSS code, images and other things.

As I've already created many extensions, I've noticed that the processes of analyzing, deciding and setting up their initial structures/files/settings before I could start coding always took some precious time and was painful in some degree. For that reason I created **a minimalistic WebExtension boilerplate** with only the basics of a WebExtension so I could **quickly create and start coding a new extension in seconds and with the least effort possible**.

## A minimalistic WebExtension boilerplate

The [minimalistic WebExtension boilerplate is an open source project available at GitHub](https://github.com/AndersonMamede/minimalistic-webextension-boilerplate){:target="_blank"}. It has no dependencies nor pre-requisities and its basic structure is given in the following way:

```
└── boilerplate/
    ├── img/
    │   ├── icon-16.png
    │   ├── icon-24.png
    │   ├── icon-32.png
    │   ├── icon-48.png
    │   └── icon-128.png
    ├── pages/
    │   └── popup/
    │       ├── index.html
    │       └── style.css
    │       └── script.js
    └── manifest.json
```

<a href="https://github.com/AndersonMamede/minimalistic-webextension-boilerplate/tree/master/boilerplate" target="_blank" rel="nofollow">boilerplate/</a>
<br>This is where the boilerplate files are stored.

<a href="https://github.com/AndersonMamede/minimalistic-webextension-boilerplate/tree/master/boilerplate/img" target="_blank" rel="nofollow">img/</a>
<br>Contains the extension's icons. You can put any other images here.

<a href="https://github.com/AndersonMamede/minimalistic-webextension-boilerplate/tree/master/boilerplate/pages" target="_blank" rel="nofollow">pages/</a>
<br>Contains all extension's inner pages and their JS/CSS files: popup page, configuration page, or any other HTML page.

<a href="https://github.com/AndersonMamede/minimalistic-webextension-boilerplate/tree/master/boilerplate/manifest.json" target="_blank" rel="nofollow">manifest.json</a>
<br>manifest.json is the main file for an extension and it is where you set all configurations read by the browser (e.g., name, permissions, resources, etc).

<br>
Without any further, to start our extension which shows for how long a page has been opened, we will use that boilerplate instead of creating everything from scratch.

## Usage / Download

You have 2 options to get the boilerplate:

1) **Manually** download and extract the [zip file containing the boilerplate](https://github.com/AndersonMamede/minimalistic-webextension-boilerplate/archive/master.zip){:target="_blank" rel="nofollow"};

2) Use **git** to clone the repository:

```sh
git clone https://github.com/AndersonMamede/minimalistic-webextension-boilerplate.git
```

After you clone/download the boilerplate you already have a **working extension**. The WebExtension and its files are inside the *boilerplate* folder.

Being a minimalistic boilerplate, it has nothing more than the necessary configuration, folders and files. **Installing an extension on Chrome or Firefox** is simple:

* To install a WebExtension for Chrome go to chrome://extensions, click the "Load unpacked extension" button and select the *boilerplate* folder;

* To install a WebExtension for Firefox go to about:debugging, click the "Load Temporary Add-on" button and select the *manifest.json* file inside the *boilerplate* folder;

After installation you'll see a blue square near the address bar - that's the boilerplate extension:
![A minimalistic WebExtension boilerplate]({{ site.url }}/images/minimalistic-webextension-boilerplate.png)

## Coding a WebExtension

All you need to create a WebExtension is this boilerplate and **you're ready to start**.

*PS: give the boilerplate folder a semantic name (e.g. the name of your project) and don't forget to reinstall the extension.*

<br><br>
<strong>We'll use that minimalistic boilerplate to code an extension</strong> in the second post of this series (available in the next days):
Creating an extension - Part 2: Coding an extension for Chrome and Firefox
