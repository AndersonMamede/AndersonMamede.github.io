---
layout: post
title: "How to check if captcha is valid (in ScriptCase)"
date: 2016-08-01 23:07:22
tags:
- scriptcase
---

Some time ago I had to implement [**captcha**](http://www.scriptcase.net/tutorials/using-the-captcha-form-login/){:target="blank"} in a Control application in **ScriptCase**. I didn't have trouble with the implementation, as it's very simple:

* menu "Control"
* section "Security"
* option "Use captcha" should be "Yes"

But I also had to **control (log) all access attempts**, and to do that I had to know what exactly was wrong with the access attempt. It could be that the fields were not correctly filled in (e.g. empty fields), or that the user informed an invalid captcha. And it's this second case, invalid captcha, that **I had to track**.

In a Control/Form application there's the event [onValidateFailure](http://www.scriptcase.net/docs/en_us/v81/control-applications/control/events/events){:target="_blank" rel="nofollow"}, which runs when the form validation fails. This was the event that I could use to obtain the information that the captcha was invalid. But ScriptCase **doesn't make distinction about what was wrong** neither provides us an easy way to determine it. There is no documented way to know why the form validation failed. So I had to spend some time searching and trying to understand ScriptCase's internal code to **figure out how validations are made**.

## Solution

The solution I found to **check if captcha is valid** is very short and easy. I noticed that ScriptCase stores the correct captcha in the $_SESSION variable, and the user supplied captcha in the property "captcha_code" inside the application's object ($this). So, basically, all I had to do was check, in the **onValidateFailure** event, if both captchas are equal or different.

The final code is this (put inside the onValidateFailure event);

```php
<?php
$officialCaptcha = strToUpper($_SESSION["securimage_code_value"]);
$userSuppliedCaptcha = strToUpper($this->captcha_code);

if($userSuppliedCaptcha != $officialCaptcha){
	sc_log_add("...");
}
?>
```


**Pay attention** to this detail: ScriptCase's captcha is **case-insensitive**, that is, upper and lowercase letters are interpreted as being the same; but the captchas stored in the variables $_SESSION/$this are **case-sensitive**. So before comparing both captchas you have to normalize them so they are in the same format (as I did in the above code, using strToUpper in both values).

As you can see the code is very simple, but it's useful to implement **access control**, for example, to log access attempts and then maybe block user access if he's acting with malicious intents.