<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url()?>">
    <style>
        html{
            font-size: 62.5%;
        }
        div{
            width: 20rem;
            height: 20rem;
            border: 0.2rem solid #ccc;
            margin: 5rem auto;
            position: relative;
        }
        form{
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -7rem;
            margin-top: -6.3rem;
        }
        input[placeholder]{
            height: 2.7rem;
            margin-bottom: 1.3rem;
        }
        a{
            text-decoration: none;
            color: #000;
        }
        a:hover, input:hover{
            text-decoration: underline;
            color: limegreen;
        }
        .regist{
            margin-left: 2.3rem;
        }
    </style>
    <head>
<body>
<div>
    <form action="admin/save_admin" method="post">
        <input type="text" name="username" placeholder="请输入用户名..."/><br>
        <input type="password" name="password" placeholder="请输入密码..."><br>
        <input class="regist" type="submit" value="注册">
        <a class="regist" href="admin/go_login">已注册？请登录</a>
    </form>
</div>
</body>
</html>