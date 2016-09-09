---
layout: post
date: 2016-07-06 21:08:47
title: "Image preview before upload"
tags:
- javascript
- ui-ux
---

Showing preview of files before uploading them to a server, specially for images, is a really interesting functionality for users and is quite simple to implement.

It's possible to show preview even on heavily AJAX-based web pages/applications, as the preview can be done with **JavaScript and it does not rely on server processing**. If this is your case (web pages/application AJAX-based) you can also [upload your files with AJAX]({{ site.url }}/upload-de-arquivos-com-ajax-jquery/){:target="_blank"}.
<br><br>

Here I'll show you how to implement image preview with JavaScript by following these steps:

**1** - Detect when user selects a file using the **onchange** event;

**2** - Check if the selected file is an image;

**3** - Load the content of the image in an IMG element using the *[**FileReader API***](https://developer.mozilla.org/pt-BR/docs/Web/API/FileReader){:target="_blank" rel="nofollow"};
<br><br>

The [FileReader API](https://developer.mozilla.org/pt-BR/docs/Web/API/FileReader){:target="_blank" rel="nofollow"} provides us a set of JavaScript functions to read content of files stored in user's computer. It's supported in all major browsers and you can check more details about [compatibility here](http://caniuse.com/#feat=filereader){:target="_blank" rel="nofollow"}.
<br><br>

You can check this [demo of image preview before upload]({{ site.url }}/demo/image-preview-before-upload/){:target="_blank"}. And here is its code:
<br>

```html
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Image preview before upload / Demo</title>
	</head>
	<body>
		<form>
			<img id="image" src="placeholder.png"><br>
			<input id="image_file" name="image_file" type="file" accept="image/*">
		</form>
		<script>
			/*
			 * For demonstration porpuse, all JavaScript code was incorporated in
			 * the HTML file. But when developing your application, your JavaScript code
			 * should be in a separated file. Check this page for more information:
			 * https://developer.yahoo.com/performance/rules.html#external
			 */
			(function(){
				var $image = document.querySelector("#image");
				var $imageFile = document.querySelector("#image_file");
				
				// The onchange event fires when a file is selected in the image_file field
				$imageFile.onchange = function(){
					if(this.value){
						showImagePreview(this.files[0]);
					}else{
						resetImage();
					}
				};
				
				function checkForBrowserSupport(){
					if(typeof FileReader != "function"){
						alert("Your browser does not support image preview!");
						return;
					}
					
					return true;
				}
				
				function isImageFile(selectedFile){
					if(!selectedFile.type.match(/^image\//)){
						alert("Selected file is not an image!");
						resetImage();
						return false;
					}
					
					return true;
				}
				
				function showImagePreview(selectedFile){
					if(!checkForBrowserSupport() || !isImageFile(selectedFile)){
						return;
					}
					
					// Update IMG element with the content of the selected
					// file using the FileReader API
					var reader = new FileReader();
					
					reader.onload = function(e){
						$image.src = e.target.result;
					};
					
					reader.readAsDataURL(selectedFile);
				}
				
				function resetImage(){
					$image.src = "placeholder.png";
					$imageFile.value = "";
				}
			})();
		</script>
	</body>
</html>
```
