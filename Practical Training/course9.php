<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
include_once 'inc/page.inc.php';
$link=connect();
$member_id=is_login($link);
$template['css']=array('style/public.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}$course_id='20182023104';
$adress='course9.php ';

include_once 'index.inc/index1.inc.php';
?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Google Fonts Includes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Favi icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css2/assets/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css2/assets/animate.css">
    <!-- Button Hover animate css -->
    <link rel="stylesheet" href="css2/assets/hover-min.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css2/assets/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css2/assets/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css2/assets/owl.carousel.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="css2/assets/slick.css">
    <!-- chosen.min-->
    <link rel="stylesheet" href="css2/assets/jquery-customselect.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css2/assets/font-awesome.min.css">
    <!-- magnific Css -->
    <link rel="stylesheet" href="css2/assets/magnific-popup.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css2/assets/revolution/layers.css">
    <link rel="stylesheet" href="css2/assets/revolution/navigation.css">
    <link rel="stylesheet" href="css2/assets/revolution/settings.css">
    <!-- Preloader css -->
    <link rel="stylesheet" href="css2/assets/preloader.css"> 
    <!-- custome css -->
    <link rel="stylesheet" href="css2/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css2/responsive.css">
    <link rel="stylesheet" href="css2/master.css">
	<link rel="stylesheet" href="css/lq-score.css">
	<link rel="stylesheet" href="css/demo.css">
	
	 <link rel="stylesheet" href="css2/nav.css">
	<!-- alert css-->
	<link href="css/style.css" rel="stylesheet" />
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<!-- 视频 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
	body{background-color: #222}
.videolist { position:relative; float:left; width:500px; height:300px; margin-right:50px; margin-top:15px; margin-bottom:30px; }
.videolist:hover{ cursor: pointer; }
.videoed { display:none; width:50px; height:50px; position: absolute; left:45%; top:45%; z-index:99; border-radius:100%; }
.videos{ display:none; border: 1px solid #080808; position:fixed; left:50%; top:50%; margin-left:-320px; margin-top:-210px; z-index:100; width:640px; height:360px; }
.vclose { position:absolute;right:1%; top:1%; border-radius:100%; cursor: pointer; }
</style>
    
</head>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<body>
<!-- header area start here -->
<header>
    <div class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 tap-v-responsive">
                    <div class="logo-area">
                        <a href="index.html"><img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav>
                        <ul class="main-menu text-right">
                            <li class="active"><a href="index.php">首页</a>
                            </li>
                            <li><a href="course.php">课程资源</a>
                                <ul class="dropdown">
                                    <li><a href="">计算机类</a></li>
                                    <li><a href="">文学类</a></li>
                                    <li><a href="">通识类</a></li>
                                </ul>
                            </li>
                            <li><a href="pinglun.php">课程评论</a>
                                <ul class="dropdown">
                                    <li><a href="">计算机类</a></li>
                                    <li><a href="">文学类</a></li>
                                    <li><a href="">通识类</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="person.php">个人信息</a>
                               
                            </li>
                            <li><a href="ourteam.php">关于我们</a>
                            </li>                           
                        </ul>
                    </nav>
                </div> <!-- main menu end here -->
            </div>
        </div>
    </div> <!-- header-bottom area end here -->
</header> <!-- header area end here -->

    <section class="breadcrumb-blog-version-one">
        <div class="single-bredcurms">
         <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:130%; z-index:-1">    
			 <img src="http://img.1ppt.com/uploads/allimg/1812/1_181225152355_1.jpg"  style=" width:100%;height:450px;">    
			 </div>
           <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                        <div class="bredcrums-content">
                            <h2>代码全写队</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- blog breadcrumb version one end here -->
<section id="blog" class="section-paddings single section page blog_wrapper">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-12 col-xs-12">
<!-- Single blog -->
<div class="single-blog">

<div class="video">
	<div class="container" >
		<div class="videolist" vpath="v1.jpg" ipath="ckin.mp4">
			
			<img src="img/v1.jpg" width="540px" height="300px" />
			<div class="vtime">2018-06-22</div>
			<img src="img/play.png" class="videoed">
		</div>
		
		
		<div class="videos"></div>
	</div>
</div>

<script type="text/javascript" src="js2/jquery.min.js"></script>
<script type="text/javascript">
$('.videolist').each(function(){ //遍历视频列表
	$(this).hover(function(){ //鼠标移上来后显示播放按钮
		$(this).find('.videoed').show();
	},function(){
		$(this).find('.videoed').hide();
	});
	$(this).click(function(){ //这个视频被点击后执行
		var img = $(this).attr('vpath');//获取视频预览图
		var video = $(this).attr('ipath');//获取视频路径
		$('.videos').html("<video id=\"video\" poster='"+img+"' style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"img/gb.png\" width=\"25\" height=\"25\">");
		$('.videos').show();
	});
});

function close1(){
	var v = document.getElementById('video');//获取视频节点
	$('.videos').hide();//点击关闭按钮关闭暂停视频
	v.pause();
	$('.videos').html();
}
</script>
						<div class="blog-content" style="margin-left:20px;margin-right:30px">
						<!-- Start blog -->

						<?php include_once 'index.inc/index2.inc.php';?>
						<p>宇宙是如何起源，又是如何演化、发展、灭亡的？自古以来一直是人类最感兴趣和不断探索的问题之一，这也是本课程要向学习者介绍的内容，包括牛顿的万有引力理论，爱因斯坦的广义相对论，霍金的宇宙观，时间、历法，太阳系，恒星，星系，致密天体，宇宙论等。</p>
						<p><strong>课程概论</strong></p>
						<p>(1)在当今社会，向学习者介绍科学的宇宙观和方法论显得很有必要，这在很大程度上有利于学习者掌握用辩证唯物主义的观点观察问题和解决问题的能力。

						浩瀚的宇宙展现了无比的壮丽，同时也展现了无穷的神秘。人类自从诞生起，就开始了对宇宙的观察和思考。但到目前为止，并没有一种理论能够揭示所有的宇宙奥秘，就连宇宙是如何起源的这一似乎再简单不过的问题，其理论也正在不断争论、发展之中。是什么物质创生了宇宙？创生宇宙的物质从何而来？是什么力量使创生宇宙的物质创生了宇宙？无数的疑惑，无数的问题，促使人们进行无尽的思索，无尽的遐想，这种遐想甚至超越了常人思维的极限。本课程向学习者介绍传统的经典理论，最新的天文学发现和研究成果，开拓学习者的知识面。
						</p>
						<p><strong>课程大纲</strong>
						</p>
						<br><label>第一章 绪论</label>
						<br><label>第二章 太阳系</label>
						<br><label>第三章 恒星</label>
						<br><label>第四章  星系</label>
						<br><label>第五章 特殊天体</label>
						<br><label>第六章 宇宙论</label>
						<br><label>第七章 地外生命</label>
						<br><label>第八章 霍金的宇宙</label>
						<br><label>第九章 宇宙探索</label>
						<br><label>第十章 中国天文学和空间探测情况</label>

						
					</div>
				</div><!--/ End Single blog -->

				<!-- Blog Comment Wrappper-->
				<?php include_once 'index.inc/index3.inc.php';?>

			<!--  Leave Commnent Wrapper -->
			</div>
		</div>
					  
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
			<div class="blog-right-items">

				<div class="search_blog widget_single">
					<div class="form-full-box">
						<form>
							<div class="form-group">
								<input class="form-control" name="name" placeholder="课程名称"  type="text">
								<button class="register-btn" type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>


				<div class="recent_post_wrapper widget_single">
					<div style="width:350px;height:450px;background:white;position:relative;left:0px;top:10px;border-radius:10px">
						<div class="items-title" style ="margin-left:20px">
							<h3 class="title">相关课程</h3>
							<hr>
						</div>
					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						   <a href="course8.php" title=""><img src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course8.php" title="">自然计算方法导论</a>
							<div class="post-date">
							   <span>May 29, 2019</span>
							</div>
						</div>
					</div>

					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						  <a href="course3.php" title=""><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course3.php" title="">信息安全概论</a>
							<div class="post-date">
							  <span>25 August, 2019</span>
							</div>
						</div>
					</div>


					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						   <a href="course2.php" title=""><img src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course2.php" title="">物联网应用及安全</a>
							<div class="post-date">
							   <span>25 August, 2019</span>
							</div>
						</div>
						</div>
					</div>
				</div>

				<div class="recent_post_wrapper widget_single">
					<div style="width:350px;height:500px;background:white;position:relative;left:0px;top:10px;border-radius:10px">
						<div class="items-title" style ="margin-left:20px">
						  <h3 class="title">课程老师</h3>
						</div>
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="images/blog/f4.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">刘华骏</a>
							 
							</div>
						</div>
									
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="images/blog/f5.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">徐晓辉</a>
							  
							</div>
						</div>
									
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="images/blog/f6.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">黄爽</a>
							 
							</div>
						</div>
					</div>
				</div>



				<div class="popular_tags widget_single">
					<div style="width:350px;height:200px;background:white;position:relative;left:0px;top:10px;border-radius:10px">
						<div class="items-title" style ="margin-left:20px">
							<h3 class="title">课程类型</h3>
						</div>
						<div class="tags-items" style ="margin-left:20px">
							<ul class="list-unstyled">
								<li><a href="" title="">计算机类</a></li>
								<li><a href="" title="">文学类</a></li>
								<li><a href="" title="">通识类</a></li>
								<li><a href="" title="">。。。</a></li>
							</ul>
						</div>
					</div>
				</div>  
			</div>
		</div><!-- ./ End  Blog Right Wrapper--><!-- ./ End  Blog Right Wrapper-->
			   
	</div>
</section>

<footer class="footer-area">
	<div class="container">
		<div class="row">
			<!-- footer left -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="single-footer">
					<div class="footer-title">
						<h3><a href="#"><img src="images/logo.png" alt=""></a></h3>
					</div>
					<div class="footer-left">
						<div class="footer-logo">
							<p>代码全写队 </p> <p>产品经理：彭英杰 项目经理：张雷 </p><p>技术经理：马赞 </p><p>成员：汪志豪   余冠达</p>
						</div>
						<ul class="footer-contact">
							<li><img class="map" src="images/icon/map.png" alt="">武汉大学</li>
							<li><img class="map" src="images/icon/phone.png" alt="">+123-456-7890</li>
							<li><img class="map" src="images/icon/gmail.png" alt="">123456789@qq.com</li>
						</ul>
					</div>
				</div>
			</div> <!-- footer left -->

			<!-- footer destination -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-2">
				<div class="single-footer">
					<div class="footer-title">
						<h3>Quick Link</h3>
					</div>
					<ul class="list-unstyled">
						<li><a href="index.php" title="">首页</a></li>
						<li><a href="course.php" title="">课程资源</a></li>
						<li><a href="" title="">课程评论</a></li>
						<li><a href="" title="">课程评分</a></li>
						<li><a href="person.php" title="">个人信息</a></li>
						<li><a href="ourteam.php" title="">关于我们</a></li>

					</ul>
				</div>
			</div>	<!-- footer destination -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-footer">
					<div class="single-recent-post">
						<div class="footer-title">
							<h3>Recent News</h3>
						</div>
						<ul class="recent-post">
							<li>
								<a href="course5.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>身边的材料学 </label>
                                       <br><label>课程ID：20182018155</label>


									</span>
								</a>
							</li>
							<li>
								<a href="course3.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>信息安全概论 </label>
                                        <br><label>课程ID：20182047080</label>

									</span>
								</a>
							</li>
							<li>
								<a href="course1.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>C语言程序设计 </label>
                                        <br><label>课程ID：20182047086</label>

									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>	<!-- footer latest news -->

			<!-- footer contact -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-3 f-phone-responsive">
				<div class="single-footer">
					<div class="footer-title">
						<h3>联系我们</h3>
					</div>
					<div class="footer-contact-form">
						<form action="#">
							<ul class="footer-form-element">
								<li>
									<input type="text" name="email" id="email" placeholder="" value="Email Address" onblur="if(this.value==''){this.value='Email Address'}" onfocus="if(this.value=='Email Address'){this.value=''}">
								</li>
								<li class="text_area">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
									<button type="submit">Send</button>
								</li>
								<li>

								</li>
							</ul>
						</form>
					</div>
					<div class="footer-social-media">
						<div class="social-footer-title">
							<h3>Follow Us</h3>
						</div>
						<ul class="footer-social-link">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>	<!-- footer contact -->
		</div>
	</div>
	<div class="footer_bottom_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="copy_right_wrapper">
						<div><p>©2019 代码全写队</p></div>
						<ul class="payicon pull-right">
							<li>We Accept : </li>
							<li><a href="" title=""><img src="images/payicon01.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon02.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon03.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon04.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon05.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon06.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer> <!-- end footer -->
<!-- fenxiang start -->
<div class="suspension">
	<div class="suspension-box">
	<a href="javascript:share.weibo();" class="nav"><img src="images/weibo.jpg" width="44px" height="44px"></a>
<a href="javascript:share.qzone();" class="nav"><img src="images/qzone.jpg" width="44px" height="44px"></a>
<a  href="javascript:share.qq();" class="nav"><img src="images/qq.jpg" width="44px" height="44px" ></a>
<a href="javascript:share.weixin();" class="nav"><img src="images/weixin.jpg"width="44px" height="44px" ></a>

	</div>
</div>
<script src="js/share.js"></script>
<script>	
var share = new SimpleShare({
url: window.location.href,
title: '公共课程',
content: '这门课真的不错',
pics: ''
});

</script><!-- fenxiang end -->
<div class="to-top pos-rtive">
    <a href="#"><i class = "fa fa-angle-up"></i></a>
</div><!-- Scroll to top-->

    <!-- ============================
            JavaScript Files
    ============================= -->

    <!-- jquery latest version -->
    <!-- <script src="js/vendor/jquery-3.2.0.min.js"></script>-->
	<!--<script src="js/jquery-1.7.1.min.js"></script>-->
	<script src="js/ui.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/lq-score.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>  
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- Jquery plugin -->
    <script src="js/plugins.js"></script>
    <!-- select2 js plugin -->
    <script src="js/select2.min.js"></script>    
    <script src="js/colors.js"></script>
    <!-- Jquery plugin -->
    <script src="js/jquery-customselect.js"></script>
    <!-- main js -->
    <script src="js/custom.js"></script>
	
	<script>
		/*
		属性参数介绍：
			$tipEle--------提示元素，请传入jquery对象
			fontSize-------大小，字符串类型
			isReScore------是否允许重新评分
			tips-----------提示，可以是default默认消息，可以传模板字符串，也可以传长度为5的数组
			zeroTip--------无分数提示，字符串类型
			score----------分数，小数、整数都可以
			callBack-------评分回调，会返回分数和插件元素李，例：function(score,ele){}
			content--------内容
			defultColor----默认颜色(未选中的颜色)
			selectColor----选中后的颜色，可以传单个字符串，也可以传长度为5的数组
		*/
		$(function () {
			//demo1
			$("#demo1").lqScore();
			//demo2
			$("#demo2").lqScore({
				callBack: function (score, ele) {
					alert(score);
				}
			});
			//demo3
			$("#demo3").lqScore({
				$tipEle: $("#tip3"), //提示必须要指定显示的元素，显示样式由你自己定义，如果你不擅长css，可以使用demo中的样式
				tips: ["不推荐", "一般", "不错", "很棒", "极力推荐！"],
				zeroTip: "未评分"
			});
			//demo4
			$("#comment").lqScore({
				$tipEle: $("#score"),
				score: <?php echo $course['course_score']?>,
				fontSize:"35px"
				//如果需要设置后还能评分，请添加[isReScore:true]属性
			});
			//demo5
			$("#demo5").lqScore({
				content: "♀" //可以传图标
			});
			//demo6
			$("#demo6").lqScore({
				fontSize: "35px"
			});
			//demo7
			$("#demo7").lqScore({
				//此处修改为单颜色，若需要修改为多颜色，请传入长度为5的数组
				selectColor: "#8eb9f5",
			});
			//demo8
			$("#demo8").lqScore({
				isReScore: true//允许重新评分
			});
			//demo9
			$("#demo9").lqScore({
				$tipEle: $("#tip9"),
				tips: "default" //默认提示
			});
			//demo10
			$("#demo10").lqScore({
				$tipEle: $("#tip10"),
				tips: "我是{{lq-score}}" //  {{lq-score}}这是一个模板，分数值会将其替换
			});
		});
	</script>

</body>
</html>