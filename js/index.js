requirejs.config({
	shim: {
		"jquery.layer.1": ["jquery"]
	}
});
//requirejs使用jquery插件

require(['jquery','nav','top','jquery.layer.1'], function($, nav, top){
	//函数引用时返回值写函数名
	//导航栏
	nav();

	// portfolio特效
	$('#portfolio .container').hover(function () {
		$(this).children('.hover').stop().fadeIn();
		$(this).find('.pc').stop().animate({
			'width': 305,
			'marginLeft': -10,
			'marginTop': -10
		})
	}, function () {
		$(this).children('.hover').stop().fadeOut();
		$(this).find('.pc').stop().animate({
			'width': 285,
			'marginLeft': 0,
			'marginTop': 0
		})
	}).layer();

	//遮罩层测试代码
	//$('#portfolio .container').each(function(){
	//	for(var i=0; i<8; i++){
	//		now = $(this).data('src');
    //
	//	}
	//	console.log(now);
    //
	//});

	//$('#portfolio .container').on('click',function(){
	//	layer.close()
	//})

			//.layer(
	//	//console.log($('#portfolio .container').each(function(){
	//	//	//alert($(this).attr('data-src'));
	//	//	//this.getAttribute("data-src");
	//	//	//alert(this.getAttribute('data-src'));
	//	//	$(this).data('src');
	//	//}))
	//		console.log($(this).each(function(){this.getAttribute("data-src");}))
	//);

	//遮罩层
	//$('#container .over-lay').closeLayer();

	// myblog 瀑布流 json模拟数据代码
	//function loadData() {
	//	$('#loading').show();
	//	$.getJSON('js/myblog.json', function (data) {
	//			for (var i = 0; i < data.length; i++) {
	//				var blog = data[i];
	//				var $minUl = getMinUl();
	//				$minUl.append('<li><img src="imgs/' + blog.blog_img + '" alt=""><h3>' + blog.blog_title + '</h3><span>BRUNO MARS |<a>' + blog.blog_comment + '</a></span><p>' + blog.blog_content + '</p><a class="see-more" href="#">SEE MORE</a></li>');
	//			}
	//			$('#loading').hide();
	//	});
	//}
    //
	//loadData();
    //
	//$(window).on('scroll', function () {
	//	var $minUl = getMinUl();
	//	var scrollTop = $(window).scrollTop();
	//	if (scrollTop + $(window).height() >= $minUl.height() && scrollTop <=10000) {
	//		loadData();
	//	}
	//	//if(scrollTop >= 10000){
	//	//	function getMinUl(){
	//	//		return;
	//	//	}
	//	//}
	//});
	//function getMinUl() {
	//	var $minUl = $('.col').eq(0);
	//	for (var i = 1; i < 3; i++) {
	//		if ($minUl.height() > $('.col').eq(i).height()) {
	//			$minUl = $('.col').eq(i);
	//		}
	//	}
	//	return $minUl;
	//}

	//瀑布流
		$blogHeadSection = $('#myblog .myblog-title');
		var iHeadSectionTop = $blogHeadSection.offset().top,
				iHeadSectionHeight = $blogHeadSection.height();
		var bLoad = true;//判断是否该加载新数据
		var bLoaded = false;//判断本次请求的数据是不是加载完毕
		var isEnd = false;//判断是不是加载完数据库中的所有数据
		var page = 0;//控制分页

		function getMinUl(){
			$blogList = $('.col');
			var $minUl =  $blogList.eq(0);
			for(var i=1; i<$blogList.length; i++){
				if($blogList.eq(i).height() < $minUl.height()){
					$minUl = $blogList.eq(i);
				}
			}
			return $minUl;
		}

		$(window).on('scroll', function(){

			if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
				if(bLoad){
					bLoad = false;
					$.get('welcome/get_articles?page='+page, function(res){
						if(!res.isEnd){
							for(var i=0; i<res.data.length; i++){
								var blog = res.data[i];
								var html = '<li>'
										+ '<a href="welcome/detail?blog_id='+blog.blog_id+'"><img src="imgs/blog-post.jpg" title="blog_img" /></a>'
										+ '<h3><a href="welcome/single">'+blog.blog_title+'</a></h3>'
										+ '<span>'+blog.admin_name+' | <a href="#">13 comments</a></span>'
										+ '<p>'+blog.content+'</p>'
										+ '<a class="see-more" href="welcome/single">See More</a>'
										+ '</li>';
								var $minUl = getMinUl();
								$minUl.append(html);
							}
							bLoaded = true;
							page += 6;
						}else{
							isEnd = true;
						}
					}, 'json');
				}

				var $minUl = getMinUl();
				if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
					bLoad = true;
					bLoaded = false;
				}
			}
		});
	// loading 显示
	//$(window).on('scroll',function(){
	//			 $('#loading').hide();
	//           if ($(window).scrollTop()>2800 && $(window).scrollTop()<10000){
	//               $("#loading").fadeIn(500);
	// $('#loading').display = 'block';
	//}
	// else
	// {
	// 	$('#loading').hide();
	//     // $("#loading").fadeOut(500);
	//     // $('#loading').display = 'none';
	// }
	//});

	// nav链接
	//html页面使用锚点链接 id name都行，想要动画还得这么写
	//$('#nav .about').on('click', function () {
	//	$('body,html').animate({scrollTop: 900}, 500);
	//});
	//$('#nav .services').on('click', function (){
	//	$('body,html').animate({scrollTop: 1580}, 700);
	//});
	//$('#nav .portfolio').on('click', function () {
	//	$('body,html').animate({scrollTop: 2270}, 700);
	//});
	//$('#nav .blog').on('click', function () {
	//	$('body,html').animate({scrollTop: 2800}, 700);
	//})

	//projects
	$('#projects span').hover(function () {
		$(this).css("backgroundColor", "#64c9db");
	}, function () {
		$(this).css("backgroundColor", "#fff");
	});

	// 回到顶部
	top();
});




















