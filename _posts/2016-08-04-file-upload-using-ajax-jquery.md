---
layout: post
title: "File upload using AJAX (+jQuery)"
date: 2016-08-04 22:05:18
tags:
- javascript
---

Until some time ago there was no way to **upload files using AJAX/JavaScript** that would work in the **most recent browsers** without having to write different code for specific browsers.

One of the most common ways to simulate upload using AJAX was to submit a form to another page which would make some validations and then save the file in the right folder or in database. Another option was to use something that worked as an intermediary between the browser and the server; some plugins (e.g. jQuery Uploadify) used to use Flash back then.

## HTML5, new APIs and new possibilities

With the arrival of **HTML5 and its new APIs** available for JavaScript, uploading file using AJAX (e.g., images, documents, PDF) has become very simple. Now with a **few lines of JavaScript** it is possible to upload the file using AJAX and **without any third-party plugin**! The "new" API that provide us this functionality is the [FormData API](https://developer.mozilla.org/en-US/docs/Web/API/FormData){:target="_blank" rel="nofollow"}.

## FormData

The **FormData API** is basically an interface that provides us an easy way to create sets of data and each in its own key, **just like a form element with fields and values**, including the INPUT[FILE] that we use to upload files!

It's possible to create an empty FormData instance or pass to its constructor a form element which will have its fields and values **copied to the new object**:

```javascript
// This way formData is empty
var formData = new FormData();

// This way formData is filled in with the fields/values from #formElement
var formData = new FormData(document.getElementById("formElement"));
```

It's also possible to **add new values to formData later**. To do that you can use the **append** method:

```javascript
// Add more values to formData
formData.append("email", "test@email.com");
formData.append("age", "20");
```

FormData has many other methods you can use; you can check them in the [FormData documentation](https://developer.mozilla.org/en-US/docs/Web/API/FormData){:target="_blank" rel="nofollow"}.

## Upload using AJAX

You can check this [demo of uploading file using AJAX]({{ site.url }}/demo/file-upload-using-ajax-jquery/){:target="_blank"}. Below you can see its source code which uses jQuery and the FormData API. This implementation is very simple and basic but complete, so you can easily adapt it to you page.

**Notes about this code**:

* It uses the **jQuery library** to make the AJAX request. You can use whatever library you prefer or even make [AJAX request using plain JavaScript](http://www.quirksmode.org/js/xmlhttp.html){:target="_blank" rel="nofollow"}.

* In case your page that receives the AJAX request is a **PHP** page, the form fields are accessible through the [$_POST variable](http://php.net/manual/en/reserved.variables.post.php){:target="_blank" rel="nofollow"} and the file through the [$_FILES variable](http://php.net/manual/en/reserved.variables.files.php){:target="_blank" rel="nofollow"}.
<br><br>

```html
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>File upload using AJAX (+jQuery) / Demo</title>
	</head>
	<body>
		<form id="form-demo" onsubmit="return false">
			<input type="file" id="image" name="image"><br><br>
			<button id="button-send">Send</button>
		</form>
		<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>
			/*
			 * For demonstration porpuse, all JavaScript code was incorporated in
			 * the HTML file. But when developing your application, your JavaScript code
			 * should be in a separated file. Check this page for more information:
			 * https://developer.yahoo.com/performance/rules.html#external
			 */
			
			$("#button-send").click(sendFormData);
			
			function sendFormData(){
				var formData = new FormData($("#form-demo").get(0));
				
				var ajaxUrl = "process-upload.php";
				
				$.ajax({
					url : ajaxUrl,
					type : "POST",
					data : formData,
					// both 'contentType' and 'processData' parameters are required so
					// that all data are correctly transferred
					contentType : false,
					processData : false
				}).done(function(response){
					// In this callback you get the AJAX response to check if everything is right...
				}).fail(function(){
					// Here you should treat the http errors (e.g., 403, 404, 500)
				}).always(function(){
					alert("AJAX request finished!");
				});
			}
		</script>
	</body>
</html>
```

## Compatibility

FormData is supported in the most recent browsers and you can check the compatibility table in [its documentation page](https://developer.mozilla.org/en-US/docs/Web/API/FormData){:target="_blank" rel="nofollow"}.

## Extra

If you are implementing upload of images, you might want to check out the previous article covering [Image preview before upload]({{ site.url }}/image-preview-before-upload/){:target="_blank"}.