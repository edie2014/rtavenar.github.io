/**
 * Theme Name: Socialize Lite
 * Theme URI: http://slocumthemes.com/wordpress-themes/socialize-lite/
 * Description: A lightweight and responsive WordPress theme. This is a simple, effective and beautiful theme for bloggers or magazine websites. Get ready to socialize!
 * Author: Slocum Design Studio
 * Author URI: http://slocumthemes.com/
 * Version: 1.2.3
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl.html
 * Tags: blue, green, orange, pink, purple, red, white, light, two-columns, left-sidebar, fluid-layout, custom-colors, custom-menu, editor-style, featured-images, full-width-template, sticky-post, theme-options, threaded-comments

 * Socialize WordPress theme, Copyright (C) 2013 Slocum Studio
 * Socialize WordPress theme is licensed under the GPL.

 * @see attribution.txt for more license information.
 */

/**
 * CSS Reset - http://meyerweb.com/eric/tools/css/reset/
 * License: None (public domain)
 * Copyright: Eric Meyer, http://meyerweb.com/eric/
 *
 * We've used Eric Meyer's reset as a base and modified it a bit to suit our needs.
 */
 
 <?php
	/*** set the content type header ***/
	header("Content-type: text/css");
	
	/*** set colors ***/
	$background_header = "#3c639a";
	$background_body = "#e5eef6";
	$background_postheader = "#f3f3f3";
	$background_post = "#fff";
	
	$border_post = "1px solid #cfd1d5";
	
	$textcolor_body = "#535e78";
	$linkcolor_body = "#3c639a";
	$textcolor_title = "#fff";
	$textcolor_slogan = "#e0e0e0";
	$linkcolor_menu = "#fff";
	$linkcolor_menu_active = "#ddd";
	$linkcolor_menu_hover = "#eee";
?>
 
html,body, div, dl, dt, dd, ul, li,
pre, form, fieldset, input, textarea, blockquote, th, td, section, figure {
	margin: 0;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;

	/* Ensure that all long words are broken up so they do not exceed the width of their container elements. */
	-ms-word-wrap: break-word;
	word-wrap: break-word;
	font-family: 'Lato', sans-serif;
}

pre {
	white-space: pre-wrap;
	border: 1px solid;
}

fieldset, img, abbr, acronym  {
	border: 0;
}

img {
	max-width: 100%;
	height: auto;
}

a img {
	text-decoration: none;
}

select, iframe {
	max-width: 100%;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

address, caption, cite, code, dfn, var {
	font-weight: normal;
	font-style: normal;
}

q:before, q:after {
	content: '';
}

ul {
	list-style: none;
}

mark{
	background: none;
}

button{
	border: none;
}


/**
 * Theme Styles
 */

/* -----------------
   GRID STRUCTURE 
   -----------------*/

body{
	width: 100%;
	font-size: 16px;
	background: <?php echo($background_body);?>;
	color: <?php echo($textcolor_body);?>;
}

.clear {
	height: 0;
	font-size: 0;
	clear: both;
}

.hide {
	display: none;
}

div.in{
	margin: 0 auto;
	max-width: 740px;

}

header#header{
	width: 100%;
	clear: both;
	background: <?php echo($background_header);?>;
	float: left;
	margin-bottom: 40px;
	padding-top: 20px;
}

nav.primary-nav{
	width: 100%;
	float: left;
}

article.content{
	width: 100%;
	float: left;
	padding-bottom: 50px;
}

footer#footer{
	width: 100%;
	clear: both;
	text-align: center;
	margin-bottom: 2em;
}

section.footer {
	width: 100%;
}

/* -----------------
   TYPOGRAPHY STRUCTURE 
   -----------------*/

a{
	color: <?php echo($linkcolor_body);?>;
	text-decoration: none;
}

article.content a:hover {
	text-decoration: underline;
}

.site-title{
	font-size: 3em;
	font-weight: 900;
	line-height: 1em;
	margin-bottom: 0;
	margin-top: 0;
	display: block;
	float: left;
	color: <?php echo($textcolor_title);?>;
	padding-right:1em;
}

.slogan{
	font-weight: 300;
	margin-top: 0;
	margin-bottom: 0.85em;
	line-height: 1em;
	font-size: 1em;
	color: <?php echo($textcolor_slogan);?>;
	float: left;
}

.slogan-seminaire{
	font-size: 2em;
}

p#slogan a {
	color: <?php echo($textcolor_slogan);?>;
	text-decoration: underline;
}

p#slogan a:hover {
	text-decoration: none;
}

div#title-slogan {
	float: left;
	width: 100%;
}



/*   -------------
	  Primary Nav
	 -------------  */

nav.primary-nav-container {
	position: relative;
	z-index: 5;
	float: left;
	width: 100%;
}

nav .primary-nav{
	width: 100%;
	display: inline;
	clear: both;
	position: relative;
	float: left;
}

nav .primary-nav li{
	float: left;
	width: 20%;
	position: relative;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

nav .primary-nav-5items li{
	float: left;
	width: 20%;
	position: relative;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

nav .primary-nav li a{
	float: left;
	width: 100%;
	text-decoration: none;
	color: <?php echo($linkcolor_menu);?>;
	font-size: 14px;
	text-align: center;
	padding-bottom: 15px;
	border: 0;
}

p.menu-text {
	margin: 0;
}

p.info-seminaire {
	font-weight: bold;
}

nav .primary-nav li.current-menu-item a {
	color: <?php echo($linkcolor_menu_active);?>;
}

nav .primary-nav li a:hover{
	color: <?php echo($linkcolor_menu_hover);?>;
}



/* -----------------
   POST HOME 
   -----------------*/

section.post{
	width: 100%;
	float: left;
	margin-bottom: 40px;
	border: <?php echo($border_post);?>;
}

section.post a[href$=".pdf"]:before, section.post a[href$="/document"]:before {
	content: "\f1c1";
	font-family: FontAwesome;
	padding-right: 5px;
}

section.post a[href$=".tar.gz"]:before, section.post a[href$=".zip"]:before {
	content: "\f1c6";
	font-family: FontAwesome;
	padding-right: 5px;
}



/* -----  Home Post Header  ------*/

header.post-header{
	width: 94%;
	padding-right: 3%;
	padding-left: 3%;
	background: <?php echo($background_postheader);?>;
	clear: both;
	float: left;
	border-bottom: <?php echo($border_post);?>;
}


/* -----  Home Post Content  ------*/

article.post-content{
	width: 94%;
	padding-right: 3%;
	padding-left: 3%;
	padding-bottom: 2em;
	float: left;
	background: <?php echo($background_post);?>;
	clear: both;
	text-align: justify;
}

article.content h1.post-title, h1.post-title a, article.content h2.post-title, h2.post-title a,
article.content h1.page-title, h1.page-title a, article.content h2.page-title, h2.page-title a {
	font-size: 28px;
	font-weight: 900;
	margin-top: 15px;
	margin-bottom: 15px;
	line-height: 1.2em;
}

article.post-content p{
	line-height: 1.3em;
}

article.post-content p.condensed {
	line-height: 1.1em;
}




/* -----------------
   POST/PAGE TYPOGRAPHY
   -----------------*/

article.content h1, article.full-content h1{
	font-size: 36px;
	line-height: 1em;
	margin-top: 20px;
	margin-bottom: 0.5em;
}

article.content h2, article.full-content h2{
	font-size: 28px;
	font-weight: 300;
	line-height: 1em;
	margin-top: 10px;
	margin-bottom: 0.5em;
}


article.content h3, article.full-content h3{
	font-size: 24px;
	margin-top: 10px;
	margin-bottom: 0.5em;
}


article.content ul, article.full-content ul{
	margin-left: 20px;
	list-style: square;
	margin-bottom: 15px;
}


article.content li, article.full-content li{
	margin-top: 15px;
}

img.project {
	width: 25%;
	float: left;
	padding-top: 10px;
	padding-right: 10px;
}

h3.project {
	clear: both;
	padding-top: 10px;
}


@media only screen and (max-width : 1000px) {
	div.in{
		width: 95%;
	}	

	article.content{
		float: left;
	}
	
	.site-title{
		float: none;
		clear: both;
		text-align: center;
		width: 100%;
	}

	.slogan{
		float: none;
		clear: both;
		text-align: center;
		width: 100%;
	}
	
	p.menu-text {
		display: none;
		visibility: hidden;
	}
}
