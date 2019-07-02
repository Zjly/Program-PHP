<?php
include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
$link=connect();
$member_id=is_login($link);
//问题部分
if(isset($_POST['button'])){
	$a = $_POST['member_mail'];    //获取目标邮箱
	var_dump($a);
	$c = exec("python E:/PHP/htdocs/test/python/verification_code.py {$a}",$out,$res);//调用python包
	var_dump($out);			//$out存储验证码
}
if(isset($_POST['submit'])){
    $link=connect();
    INCLUDE 'inc/check_register.inc.php';
    $_POST=escape($link,$_POST);
    $query="insert into CM_register(register_name,register_password,register_mail,register_work) values('{$_POST['name']}',md5('{$_POST['pw']}'),'{$_POST['member_mail']}','学生')";
    execute($link, $query);
    if(mysqli_affected_rows($link)==1){
        setcookie('cookie[name]',$_POST['name'],time()+3600);
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]','学生' ,time()+3600);
		
        skip('index.php','ok','注册成功！');
    }else{
        skip('register.php','eror','注册失败,请重试！');
    }
}
?>
<?php 
include_once 'inc/head.inc.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>注册</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/common3.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />

<!-- <link rel="stylesheet" type="text/css" href="style/register.css" /> -->
</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					<div style="width: 360px;height:500px;border: 10px solid #9ed">	
					<div class="login_form">
						<div class="login_title">
							注册账号
						</div>
						<form action="#" method="post">
							
							<div class="form_text_ipt">
								<input name="name" type="text" placeholder="账号">
							</div>
							<div class="ececk_warning"><span>账号不能为空</span></div>
							<div class="form_text_ipt">
								<input name="pw" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input name="confirm_pw" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>密码不一致</span></div>
							<div class="form_text_ipt">
								<input name="member_mail" id ="member_mail" type="text" placeholder="电子邮箱/用于验证">
							</div>
							<div class="ececk_warning"><span>电子邮箱无效！</span></div>
							<div class="form_button_ipt">
							<input name= "code" type="text" placeholder="验证码" style = "padding: 6px;margin: 5px;font-size: 15px;color:#666;height: 35;width:134 ;margin-left: 20px;margin-top: 20px">
							<input id = "getcode"  class="form_button_ipt" type="submit" name="button" onclick="onclick()"  value="获取验证码" > 
							
							<!-- 更改type时在css/common3中对应form_button_ipt以及form_button_ipt.on中[type = 对应button或submit] -->
							<script type='text/javascript' src='60.js'></script>
							</div>	
							

							<div class="form_btn">
								<input class="btn" name="submit" type="submit" value="确定注册" style = "background: #FF7F50;color:black;height: 35;width:300 ;margin-left: 0px;margin-top: 0px"  />
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="login.php">马上登录</a>
							</div>
							
						</form>
		
					</div>
				</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
		

	</body>
 
</html>
