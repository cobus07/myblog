<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio a Personal Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<div id="nav">
		<div class="nav-bg"></div>
		<ul class="nav-menu">
			<li><a href="welcome/index">HOME</a></li>
			<li><a href="#aboutme">ABOUT</a></li>
			<li><a href="#myservice">SERVICES</a></li>
			<li><a href="#portfolio">PORTFOLIO</a></li>
			<li><a href="#myblog">BLOG</a></li>
			<li><a href="javascript:viod(0);">CONTACT</a></li>
		</ul>
		<span class="nav-close"></span>
	</div>
	<div id="header">
		<img src="imgs/bg2.jpg" class="header-bg">
		<span class="nav-show"></span>
	</div>
	<div id="contact">
		<div class="contact-left">
			<form action="" method="post">
				<p class="name">
					<label for="name">YOUR&nbsp;NAME:</label>
					<input type="text" id="name" name="username" class="info" placeholder="Enter...">
				</p>
				<p class="email">
					<label for="email">EMAIL:</label>
					<input type="text" id="email" name="email" class="info" placeholder="Enter...">
				</p>
				<p class="message">
					<label for="message">MESSAGE:</label>
					<textarea name="message" id="message" ></textarea>
				</p>
				<input type="button" name="submit" id="submit" value="SUBMIT">
			</form>
		</div>
		<div class="contact-right">
			<h2>ADDRESS</h2>
			<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non</p>
			<span class="phone">1-25-2568-897</span>
			<span class="email"><a href="">mail@portfolio.com</a></span>
		</div>
	</div>
	<div id="footer">
		<p>Template&nbsp;by&nbsp;<a href="#">W3layouts</a></p>
		<ul>
			<li><a href="#"><span class="face"></span></a></li>
			<li><a href="#"><span class="twit"></span></a></li>
			<li><a href="#"><span class="dri"></span></a></li>
			<li><a href="#"><span class="tech"></span></a></li>
		</ul>
	</div>
	<a href="javascript:;" id="to-top"></a>
	<script src="js/require.js" data-main="js/contact.js"></script>
</body>
</html>