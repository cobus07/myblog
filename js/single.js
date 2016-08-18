require(['jquery','nav','top'],function($,nav,top){
	//导航栏
	nav();
	//提交按钮
	$('[type="submit"]').hover(function(){
		$(this).css('backgroundColor','#0CC7E8');
	},function(){
		$(this).css('backgroundColor','#02D7FD');
	});

	// 回到顶部
	top();
});

