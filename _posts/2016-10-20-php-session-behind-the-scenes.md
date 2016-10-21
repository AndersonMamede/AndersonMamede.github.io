---
layout: post
title: "PHP session - Behind the scenes"
date: 2016-10-20 23:01:07
tags:
- php
---

Have you ever wondered what is hapenning internally when you use PHP session? Or how and where data are kept when navigating through different pages?

In this article you will learn **how PHP manages sessions and what is happening behind the scenes**.
<br><br>

## First, what is PHP session?
[PHP session](http://php.net/sessions){:target="_blank" rel="nofollow"} is a way to **persist data** across subsequent accesses and/or multiple pages. **Differently from cookies**, session data are **stored in the server** and can't be directly manipulated by the user.

Its **basic usage is quite simple**: you just have to start a session and then you can store data in it and retrieve them later. Here is an example:

```php
<?php
// start the session
session_start();

// "first_access" is empty only in the very first access
if(empty($_SESSION["first_access"])){
	$_SESSION["first_access"] = Date("Y-d-m H:i:s");
}

// everytime the page is accessed it will show the date/time of the first access
echo "Your very first access was in " . $_SESSION["first_access"];
```
<br><br>

## Session management - behind the scenes
Basicly, the default PHP session management process can be divided into three parts: **starting the session, storing data and closing the session**.

Here is what happens in the very first time an user access our example above, which uses session:

#### 1) Starting the session
- A session can be manually started by calling the session_start function (as shown in the example), or PHP will automatically start the session if the "session.auto_start" option (in php.ini) is set to "1".
- Either way, PHP creates a brand new session with an unique identifier (the "session id");

#### 2) Storing information
- Our application stores data in the $_SESSION super global array - the date/time that the user first accessed the page;

#### 3) Closing the session
- A session can be manually closed by calling the session_write_close function (or session_commit, which is just an alias to session_write_close), or PHP will automatically close the session after the script terminated.
- If $_SESSION is not empty, PHP serializes and stores all its data in a temporary file in the hard disk. Each single session file is linked to a single session and its name consists of the session id prefixed by "sess_", and the saving path is determined by the "session.save_path" option (in php.ini) or by calling the session_save_path function.
- The session id is then sent to the user via cookies, which is stored in the browser;

For the subsequent accesses, there is a difference in how the session is started:

- When a session is started, PHP checks if a session id was manually configured by the application (by calling session_id), or passed via $_GET, $_POST or $_COOKIES (with this last being the simplest and easiest way, as it's sent automatically by the browser). If a session id is found, then PHP retrieves the matching session file ("sess_" + session id), and unserialize and parses its content into the $_SESSION variable. If neither a session id and a matching session file are found, PHP creates a brand new session in the same way as in the very first access;

## Custom session management

The **default** session management is by far the most commonly used one, which is **file system** as explained above: data are stored in and retrieved from a file in the disk. But in certain cases you may prefer to use custom session handlers (e.g., database), which can be done through the [session_set_save_handler](http://php.net/session_set_save_handler){:target="_blank"} function; but be aware that you would need to **create all the basic operations** used in session management: open/start, close, read, write, destroy, and also garbage collect.

You can find more information and some examples in the [session_set_save_handler documentation](http://php.net/session_set_save_handler).
