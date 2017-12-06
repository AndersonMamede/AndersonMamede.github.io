---
layout: post
title: "Breadcrumbs and schema markup"
date: 2017-12-06 20:40:55
tags:
- ui-ux
- html
- schema.org
---

### Breadcrumbs

In digital scenario, [breadcrumbs](https://developers.google.com/search/docs/data-types/breadcrumbs){:target="_blank" rel="nofollow"} are structural navigation systems used in user interfaces to provide users with a way to locate themselves within the structure of a website. **Breadcrumbs** show the traveled path by the user and/or the depth where he's in.

![Example of breadcrumbs in a website]({{ site.url }}/images/breadcrumbs-page-example.png)

For usability, **breadcrumbs** will:

* stimulate users interest and curiosity
* reduce the number of actions necessary to go to parent pages
* improve the findability of pages and sections
* direct users around your site
* show website hierarchy

### Breadcrumbs, SERPs and SEO

Breadcrumbs are also **good for SERPs** and can have beneficial impact on your SEO.

Using a proper schema.org markup you can setup breadcrumbs to appear on your page listing within the SERPs. Although they don't actually improve SEO ranking, they **improve the page's visibility within the results**, which attract people's attention.

This is how a page without the schema.org markup for breadcrumbs appears on Google's result page:
![Page without schema markup]({{ site.url }}/images/breadcrumbs-serp-result-simple.png)

Now the same page with proper markup for breadcrumbs (microdata):
![Page using schema markup]({{ site.url }}/images/breadcrumbs-serp-result.png)

### How to implement breadcrumbs with schema.org markup?

It's actually quite easy to setup [breadcrumbs with schema markup](http://schema.org/BreadcrumbList){:target="_blank" rel="nofollow"} in your HTML pages. Taking the above PC World's breadcrumbs as example, this is the HTML and schema markup to have the breadcrumbs showing in SERPs:

``html
<ol itemscope itemtype="http://schema.org/BreadcrumbList">
	<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
		<a href="https://www.example.com/" itemprop="item">
			<span itemprop="name">Home</span>
		</a>
		<meta itemprop="position" content="1"/>
	</li>
	<li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
		<a href="https://www.example.com/computing/" itemprop="item">
			<span itemprop="name">Computing</span>
		</a>
		<meta itemprop="position" content="2"/>
	</li>
</ol>
``

This is all you need to setup the breadcrumbs. You can change the href attributes and descriptions and also add more itens.

After setting up the markup in your page, you can [check if the markup is correct and if the breadcrumbs can be found by SERPs using this Google testing tool for structured data](https://search.google.com/structured-data/testing-tool){:target="_blank" rel="nofollow"}.
