<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>personal-website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="cobus cobus07 孙鹏博 前端">
	<base href="<?php echo site_url()?>">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/layer.css">
<!--	<script type="application/x-javascript">-->
<!--		addEventListener('load',function(){-->
<!--			setTimeout(hiderURL,0);-->
<!--		},false);-->
<!--		function hiderURL(){-->
<!--			window.scrollTo(0,1);-->
<!--		}-->
<!--	</script>-->
</head>
<body>
<!--nav-->
	<div id="nav">
		<div class="nav-bg"></div>
		<ul class="nav-menu">
			<li><a class="home" href="javascript:;">主页</a></li>
			<li><a class="about" href="#aboutme">关于我</a></li>
			<li><a class="services" href="#myservice">SERVICES</a></li>
			<li><a class="portfolio" href="#portfolio">作品</a></li>
			<li><a class="blog" href="#myblog">文章</a></li>
			<li><a class="contact" href="welcome/contact" target="_blank">联系我</a></li>
		</ul>
		<span class="nav-close"></span>
	</div>
<!--header-->
	<div id="header">
		<img src="imgs/bg2.jpg" class="header-bg">
		<span class="nav-show"></span>
		<div class="nav-content">
			<img src="imgs/pic.png">
			<a href="admin/admin_regist"><h1>孙鹏博</h1></a>
			<p>做自己喜欢的是一件很酷的事。</p>
			<ul>
				<li><a class="aboutme" href="#">Hire Me</a></li>
				<li><a class="aboutme" href="#">Follow Me</a></li>
			</ul>
		</div>	
	</div>
<!--aboutme-->
	<div id="aboutme">
		<div class="aboutme-title">
			<h1>关于我</h1>
			<span></span>
		</div>
		<div class="aboutme-content">
			<div class="aboutme-article">
				<h2>VIDENTUR PARUM</h2>
				<h3>GRAPHIC DESIGNER,UI/UX EXPERT</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL UT ALIQUIP EX EA COMMODO CONSEQUAT. DUIS AUTEM VEL EUM IRIURE DOLOR IN HENDRERIT IN VULPUTATE VELIT ESSE MOLESTIE CONSEQUAT, VEL ILLUM DOLORE EU FEUGIAT NULLA FAM.</p>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. SUSPENDISSE SIT AMET PURUS IPSUM. IN ANTE LEO, ELEMENTUM AT PLACERAT IN, ALIQUET NON LECTUS. NAM IMPERDIET MAGNA EU FAUCIBUS CURSUS.</p>
			</div>
			<div class="aboutme-video">
				<img src="imgs/video.jpg">
			</div>
		</div>
	</div>
<!--myservice-->
	<div id="myservice">
		<div class="myservice-title">
			<h1>。。。</h1>
			<span></span>
		</div>
		<ul class="myservice-content-top">
			<li class="first">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
			<li class="second">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
			<li class="third">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
		</ul>
		<ul class="myservice-content-bottom">
			<li class="first">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
			<li class="second">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
			<li class="third">
				<span></span>
				<h3>PRODUCT DESIGN</h3>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM</p>
			</li>
		</ul>
	</div>
<!--portfolio-->
	<div id="portfolio">
		<div class="portfolio-title">
			<h1></h1>
			<span></span>
		</div>
		<div class="portfolio-content">
			<div class="portfolio1 container" data-src="imgs/port-pic.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img class="pc" src="imgs/port-pic.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio2 container" data-src="imgs/port-pic1.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic1.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio3 container" data-src="imgs/port-pic2.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic2.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio4 container" data-src="imgs/port-pic3.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic3.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio5 container" data-src="imgs/port-pic4.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic4.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio6 container" data-src="imgs/port-pic5.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic5.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
			<div class="portfolio7 container" data-src="imgs/port-pic6.jpg" data-width="331" data-height="208">
				<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic6.jpg" alt=""></a></div>
				<div class="hover">
					<div class="portfolio-mask"></div>
					<div class="mask-center">
						<img src="imgs/hover-icon.png"></img>
						<h3>PRODUCT DESIGN</h3>
						<p>"cobus"</p>
					</div>
				</div>
			</div>
			<div class="portfolio8 container" data-src="imgs/port-pic7.jpg" data-width="331" data-height="208">
					<div class="portfolio"><a href="#"><img  class="pc" src="imgs/port-pic7.jpg" alt=""></a></div>
					<div class="hover">
						<div class="portfolio-mask"></div>
						<div class="mask-center">
							<img src="imgs/hover-icon.png"></img>
							<h3>PRODUCT DESIGN</h3>
							<p>"cobus"</p>
						</div>
					</div>
			</div>
		</div>
	</div>
<!--loading-->
<!--	<div id="loading">loading...</div>-->
<!--myblog-->
	<div id="myblog">
		<div class="myblog-title">
			<h1>MY&nbsp;BLOG</h1>
			<span></span>
		</div>
	<div class="myblog-container">
		<ul class="col">
		</ul>
		<ul class="col">
		</ul>
		<ul class="col">
		</ul>
	</div>
		<p class="more-articles">Check Out <a href="welcome/single">My BLOG</a> And Subscribe To Get All The Updates</p>
	</div>
<!--projects-->
	<div id="projects">
		<div class="projects-all">
			<div class="projects-circle"></div>
			<div class="projects-top">
				<h3>79</h3>
				<p>PROJECTS</p>
				 <span><i></i></span>
			</div>
			<div class="projects-left">
				<h3>25</h3>
				<p>CLIENTS</p>
				<span><i></i></span>
			</div>
			<div class="projects-right">
				<h3>100%</h3>
				<p>SATISFACTION</p>
				<span><i></i></span>
			</div>
		</div>
	</div>
<!--contactme-->
	<div id="contact-me">
		<p>WANT TO DISCUSS ANY CREATIVE PROJCT ? </p>
		<a href="welcome/contact" target="_blank">CONTACT ME</a>
	</div>
<!--footer-->
	<div id="footer">
		<p>Template&nbsp;by&nbsp;<a href="#">W3layouts</a></p>
		<ul>
			<li><a href="#"><span class="face"></span></a></li>
			<li><a href="#"><span class="twit"></span></a></li>
			<li><a href="#"><span class="dri"></span></a></li>
			<li><a href="#"><span class="tech"></span></a></li>
		</ul>
	</div>
<!--totop-->
	<a href="javascript:;" id="to-top"></a>
	<script src="js/require.js" data-main="js/index.js"></script>
</body>
</html>