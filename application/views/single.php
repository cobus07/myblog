<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio a Personal Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/single.css">
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
			<li><a href="welcome/contact" target="_blank">CONTACT</a></li>
		</ul>
		<span class="nav-close"></span>
	</div>
	<div id="header">
		<img src="imgs/bg2.jpg" class="header-bg">
		<span class="nav-show"></span>
	</div>
	<div id="content">
		<img src="imgs/single.jpg" alt="本文主题" title="本文主题图片">
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil
		</p>
		<ul class="author">
			<?php
				foreach( $comments as $comment){
			?>
			<li>
				<h3 class="title">Written&nbsp;by&nbsp;<a href="#"><?php echo $comment->name;?></a> </h3>
				<img src="imgs/avatar.png" alt="<?php echo $comment->name;?>">
				<p class="info">View all posts by: <a href=""><?php echo $comment->subject;?></a></p>
				<span><?php echo $comment->add_time;?></span>
			</li>
			<?php
				}
			?>
		</ul>
	</div>
	<div id="comment">
		<h3>ADD NEW COMMENT</h3>
		<form action="comment/save_comment" method="post">
			<p class="name">
				<label for="name">Name:</label>
				<span>*</span>
				<input type="text" id="name" name="name">
			</p>
			<p class="email">
				<label for="email">Email:</label>
				<span>*</span>
				<input id="email" name="email" type="text">
			</p>
			<p class="website">
				<label for="website">Website:</label>
				<input id="website" name="website" type="text">
			</p>
			<p class="subject">
				<label for="subject">Subject:</label>
				<span>*</span>
				<textarea id="website" name="subject"></textarea>
			</p>
			<input type="submit" value="SUBMIT COMMENT">
		</form>
	</div>
	<div id="footer">
		<p>&nbsp;by&nbsp;<a href="#">W3layouts</a></p>
		<ul>
			<li><a href="#"><span class="face"></span></a></li>
			<li><a href="#"><span class="twit"></span></a></li>
			<li><a href="#"><span class="dri"></span></a></li>
			<li><a href="#"><span class="tech"></span></a></li>
		</ul>
	</div>
<!--	<a href="javascript:;" id="to-top"></a>-->
	<a href="javascript:;" id="to-top"></a>

	<script src="js/require.js" data-main="js/single.js"></script>
</body>
</html>