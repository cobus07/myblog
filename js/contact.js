require(['jquery','top','nav'],function($,top,nav){
	//导航栏
	nav();
	//$('input, textarea').on('focus',function(){
	//	if(this.placeholder == "Enter..."){
	//		this.placeholder = "";
	//	}
	//}).on('blur',function(){
	//	if(this.placeholder == ""){
	//		this.placeholder = "Enter...";
	//	}
	//})
	//不好使！！！！！！！！！


	//AJAX发送数据
	$('#submit').on('click',function(){
		$username = $("[name='username']");
		$email = $("[name='email']");
		$message = $("[name='message']");
		//if($username.val()==''||$email.val()==''||$message.val()==''){
		//	alert('请重新输入');
		//	//$username.focus();
		//}

		$('[name="username"]').on('blur', function(){
			$.post('message/check_name',{
				username: this.value
			},function(res){
				if(res == 'fail'){
					alert('用户名已存在');
				}
			});
		});

		$.post('message/save_message', {
			username: $username.val(),
			email: $email.val(),
			message: $message.val()
		}, function(res){
			if(res == 'fail'){
				$username.css({
					border: '1px solid red'
				});
				alert('请重新输入!');
			}else if(res == 'success'){
				alert('保存成功!');
			}
		});
	});


	// 回到顶部
	top();
});