---
layout: post
title: "How to show notifications outside the browser"
date: 2016-11-11 23:19:52
tags:
- javascript
---

HTML5 and its JavaScript APIs are not so new, and yet there are features not very well-known, which is the case with **Web Notifications**.

[Web Notifications](https://developer.mozilla.org/en-US/docs/Web/API/notification){:target="_blank" rel="nofollow"} is a JavaScript API which can **show messages (notifications)** to users. It is very useful for notifying users when something happens in a web system/page, e.g., a new message arrives, a new order is completed, a long process is ready, a user must take care as soon as possible of any new information submitted by other users.

As long as the browser is open, the notification is usually displayed on the right side of screen, **outside the browser and above everything else**, which means that even if the webpage or the browser are not visible (e.g. they're running in background or user is using another sofware), users will get to see the message.

![Web Notification demo]({{ site.url }}/images/web-notification-demo.png)

Check out this [demo to see the Web Notification API in action]({{ site.url }}/demo/how-to-show-notifications-outside-the-browser/){:target="_blank"}.

### Displaying notifications

Before you send any notification, two things must be taken into account:

* Web Notifications API is **compatible with all major browsers**, i.e. Chrome, Firefox, Safari, Opera and Microsoft Edge - but it's not compatible with the now outdated Internet Explorer. If support for Internet Explorer or any other old browser is required, you can use a simple alert to show the message when this API is not supported. For more information about browser compatibility see [http://caniuse.com/#feat=notifications](http://caniuse.com/#feat=notifications){:target="_blank" rel="nofollow"}.<br><br>
* In order to send notification, you have to **ask user for permission** (if it hans't been granted yet). A method for requesting such permission is already included in this API.

Here is an example which uses Web Notifications API to show a notification when the "Test Web Notification" button is clicked:
<br>

```html
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>How to show notifications outside the browser / Demo</title>
	</head>
	<body>
		<button id="test-button">Test Web Notification</button>
		<script>
			/*
			 * For demonstration porpuse, all JavaScript code was incorporated in
			 * the HTML file. But when developing your application, your JavaScript code
			 * should be in a separated file. Check this page for more information:
			 * https://developer.yahoo.com/performance/rules.html#external
			 */
			
			function notificationIsSupported(){
				return typeof window.Notification != "undefined";
			};
			
			function checkWebNotificationPermission(){
				// status list for permission:
				// "default" => permission hasn't been request yet
				// "denied" => Web Notification API will not work
				// "granted" => permission is already granted
				if(notificationIsSupported() && Notification.permission == "default"){
					Notification.requestPermission();
				}
			}
			
			var displayNotification = function(title, message){
				// detect what type of notification should be
				// used (WebNotification or a simple alert)
				if(!notificationIsSupported() || Notification.permission != "granted"){
					alert(title + "\n" + message);
				}else{
					new Notification(title, {
						icon : "notification.png",
						body : message
					});
				}
			};
			
			// permission should be requested as soon as the page is
			// loaded, so when a notification is ready to be sent,
			// permission is already granted
			checkWebNotificationPermission();
			
			document.querySelector("#test-button").addEventListener("click", function(){
				displayNotification("NOTIFICATION", "You have a new message.");
			});
		</script>
	</body>
</html>
```
