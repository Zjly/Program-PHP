
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<HTML>


	
<body class="bg-bright3" data-bg-color="bg-bright3">
	<div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:200%; z-index:-1">    
		<img src=""  style=" width:100%;height:100% ;">    
		</div>
    <div class="king-page-box">
	
		 <div class="king-layout1-header"data-bg-color="bg-bright3">
		 
			 <div id="Layer1" style="position: absolute ; left:0px; top:40px;width：100%; height:130%; z-index:-1">    
			 <img src="http://chuantu.xyz/t6/702/1561943468x3030586988.jpg"  style=" width:100%;height:80px">
			 </div>
			 <div style="margin-left:300px ;">
			 <font face="华文彩云" color="#157EEE">
			 <label>
				<h2> 大学生公共资源共享平台</h2>
			</label></font></div>
			
		 </div>
    <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:200%; z-index:-2">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
	
	
		<div class="king-container clearfix">
			<div class="king-layout2-main mt15" style="width:960px;">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-8">
						
                        <div id="demo1" data-ride="carousel" class="carousel slide active">
                            <!-- 图片底部的切换按钮 -->
                            <!--必须有data-target="#demo1"，否则控制无效-->
                            <ol class="carousel-indicators">
                                <li data-target="#demo1" class="active" data-slide-to="0"></li>
                                <li data-target="#demo1" data-slide-to="1" class=""></li>
                                <li data-target="#demo1" data-slide-to="2" class=""></li>
                                <li data-target="#demo1" data-slide-to="3" class=""></li>
                            </ol>
                            <!-- 图片列表,如需添加文字说明，在item里加上carousel-caption就可以 -->
                            <div class="carousel-inner" role="listbox">
                                <!-- 必须有一个item加上active-->
                                <div class="item active">
                                    <img alt="" src="http://attach.bbs.miui.com/forum/201311/17/125654en6sw0w30vfnd7f0.jpg"style="width:800px;height:300px;">
                                    <div class="carousel-caption">
                                        <h3>文字一</h3>
                                        <p>文字二</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="http://attach.bbs.miui.com/forum/201502/12/203907r0zees05hj0nx2v0.jpg"style="width:800px;height:300px;">
                                    <div class="carousel-caption">
                                        <h3>文字er</h3>
                                        <p>文字二</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="http://pcs4.clubstatic.lenovo.com.cn/data/attachment/forum/201612/16/091850f3j76a6t7y36at88.jpg"style="width:800px;height:300px;">
                                    <div class="carousel-caption">
                                        <h3>文字er</h3>
                                        <p>文字三</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="http://attach.bbs.miui.com/forum/201606/15/093259ar35o9ijrqo94s66.jpg"style="width:800px;height:300px;">
                                    <div class="carousel-caption">
                                        <h3>文字er</h3>
                                        <p>文字四</p>
                                    </div>
                                </div>
                            </div>
                            <!--左右的切换按钮-->
                            <!--必须有data-target="#demo1"，否则控制无效-->
                            <a class="left carousel-control" href="#demo1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">上一张</span>
                            </a>
                            <a class="right carousel-control" href="#demo1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">下一张</span>
                            </a>
                        </div>
                        <!-- 设置面板样式一Start -->
                        <!-- 设置面板样式一End -->
                        <div class="container-fluid mb0 ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-12">
												
                                              <div class="king-panel8 m15">
                                              <div class="king-panel8-header">
                                                  <h3 class="king-panel8-title king-info">信息学部</h3></div>
												  <div class="king-panel8-content pt25">
                                                      <form class="form-horizontal">
                                                                                        <div class="form-group clearfix">
                                                                                            <div class="col-sm-9 col-sm-offset-3"style="margin-left:2px">
                                                                                                <a href="course1.php">物联网工程</a>
                                                                                                <a href="course2.php"style="margin-left: 10px;">自然计算方法</a>
																								 <a href="course3.php"style="margin-left: 10px;">计算机思维</a>
																								 <a href="course4.php"style="margin-left: 10px;">信息安全</a><a href="course5.php"style="margin-left: 10px;">C语言</a>
																								  
                                                                                            </div>
                                                                             				</div>								   
                                                                             		</form>
                                              									
                                                       </div>
                                              </div>
                
                                               <div class="king-panel8 m15">
                                              <div class="king-panel8-header">
                                                  <h3 class="king-panel8-title king-info">工学部</h3></div>
												  <div class="king-panel8-content pt25">
                                                       <form class="form-horizontal">
                                                                                        <div class="form-group clearfix">
                                                                                            <div class="col-sm-9 col-sm-offset-3"style="margin-left:2px">
                                                                                                <a href="course6.php">航空航天概论</a>
                                                                                                <a href="course7.php"style="margin-left: 10px;">身边的材料学</a>
																								
																								
																								  
                                                                                            </div>
                                                                             				</div>								   
                                                                             		</form>
                                              									
                                                       </div>
                                              </div>
                                              
                                              <div class="king-panel8 m15">
                                              <div class="king-panel8-header">
                                                  <h3 class="king-panel8-title king-info">文理学部</h3></div>
												  <div class="king-panel8-content pt25">
                                                      <form class="form-horizontal">
                                                                                        <div class="form-group clearfix">
                                                                                            <div class="col-sm-9 col-sm-offset-3"style="margin-left:10px">
                                                                                                <a href="course8.php">宇宙新概念</a>
                                                                                                <a href="course9.php"style="margin-left: 10px;">遥感技术应用及发展</a>
																								 
                                                                                            </div>
                                                                             				</div>								   
                                                                             		</form>
                                              									
                                                       </div>
                                              </div>
                                              
                                            
                
                
                                             </div>
                                        </div>
                                     </div>
                                </div>
                           </div>
						
						
	<div class="tab-box" id="myTab4">
    <ul class="nav nav-tabs king-nav-tabs2 king-tab-success">
        <li class="active">
            <a href="#tab4_1" data-toggle="tab" aria-expanded="true">推荐课程</a>
        </li>
        <li class="">
            <a href="#tab4_2" data-toggle="tab" aria-expanded="false">更新课程</a>
        </li>
        
    </ul>
                        
        <div class="tab-content">
        <div class="tab-pane fade active in" id="tab4_1">
            <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course6.php"> <img class="img-responsive " src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width:250px;height:120px"> </a></div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                   <h6><label>航空航天概论</label>
                                                                   <label>航空航天是二十世纪以来发展最为迅速、应用最为广泛、对人类社会生活影响最大的科技领域之一。 航空航天概论将为大家展示航空航天发展的壮丽史诗和人类探索太空的艰辛历程，通过航空航天基本知识和飞行器科学与技术的学习，领略航空航天的魅力，体会人类不断探索的奋斗精神，畅想太空的奥秘和未来。</label>
                                                               </h6> </div>
                                                         
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course2.php"> <img class="img-responsive " src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100"style="width:250px;height:120px"> </a></div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                   <h6><label>自然计算方法导论</label>
                                                                    <label>本课程将课程的结构建立在计算学科认知模型的基础上，并以计算机科学的内容为背景，借助大量案例，在学科思想与方法层面，对学生认知计算学科进行导引，着力提高学生在复杂问题求解，系统设计，以及人类行为理解方面的计算思维能力。</label>
                                                                </h6></div>
                                                         
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course9.php"> <img class="img-responsive " src="https://edu-image.nosdn.127.net/C2E910CE23079A4D477A111FF2980735.png?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width:250px;height:120px"> </a></div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                   <h6><label>遥感技术应用及发展</label>
                                                                    <label>本课程为通识类教育课程，授课对象为本科学生，主要针对理工类学生开设，同时兼顾对遥感技术感兴趣的文科相关专业学生。课程目标是普及遥感科学相关知识，通过对遥感技术应用的一般性介绍让不具备系统专业知识的听众走进遥感、了解遥感，扩宽知识视野，启迪科学思维。</label>
                                                                </h6></div>
                                                         
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
        </div>
                    <div class="tab-pane fade" id="tab4_2">
                                    <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course1.php">  <img class="img-responsive " src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width:250px;height:120px"></a> </div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                    <h6><label>物联网应用及安全</label>
                                                                   <label>带你飞越信息产业第三次浪潮之巅……</label>
                                                                </h6></div>
                                                           
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
									 <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course1.php">  <img class="img-responsive " src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100"style="width:250px;height:120px"> </a></div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                    <h6><label>计算机思维导论</label>
                                                                   <label>计算手段已发展为与理论手段和实验手段并存的科学研究的第三种手段，计算思维已成为各专业学生都应掌握的思维方式。本课程用通俗易懂、趣味案例、深入浅出的方式，介绍计算学科所蕴含的经典的计算思维，属于面向全体本科生开设的计算机系列课程中第一层次的课程，是本科生必修的通识教育课程。</label>
                                                                </h6></div>
                                                           
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
									 <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4"style="margin-top:5px;">
                                               <a href="course7.php">  <img class="img-responsive " src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width:250px;height:120px"> </a></div>
                                            <div class="col-md-8">
                                                <form class="form-vertical p15">
                                                    <div class="container-fluid mb0 ">
                                                        <div class="row">
                                                            
                                                                <div class="">
                                                                    <h6><label>身边的材料学</label>
                                                                   <label>今天我们在不断前行、探索未来的同时，时常会驻足思考作为物质世界的发展史。我们周围的物质世界是如何发展到今天？构成物质世界的基础是材料，材料发展与人类文明进程有怎样的关系？未来的新材料又会怎样影响我们？本课程将会带来大家一起走进神奇的材料世界，探秘材料背后的精彩，发现身边的美好。</label>
                                                                </h6></div>
                                                           
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                        </div>
						  
                    </div>
			</div>
		
			</div>
				
                    <div class="col-md-4">
                    

              <nav style="overflow:hidden;">
                            <div class="king-vertical-nav9    f16">
                                <div class="navbar-collapse navbar-hov">
                                    <ul class="nav navbar-nav side-nav">
                                        <li class="active">
                                            <a href="index.php"> <i class="fa fa-home ">                            </i>
                                                <span>首页</span> <i class="fa fa-fw "></i> </a>
                                            <ul id="demo" class="collapse"> </ul>
                                        </li>
                                        <li>
                                            <a href="person.php"> <i class="fa fa-laptop ">                            </i>
                                                <span>个人信息</span> <i class="fa fa-fw "></i> </a>
                                            <ul id="demo" class="collapse"> </ul>
                                        </li>
                                         <li>
                                            <a href="xuanze.php"> <i class="fa fa-sitemap ">                            </i>
                                                <span>课程资源</span> <i class="fa fa-fw "></i> </a>
                                            <ul id="demo" class="collapse"> </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="fa fa-image ">                            </i>
                                                <span>课程评论</span> <i class="fa fa-fw "></i> </a>
                                            <ul id="demo" class="collapse"> </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="fa fa-sitemap ">                            </i>
                                                <span>课程评分</span> <i class="fa fa-fw "></i> </a>
                                            <ul id="demo" class="collapse"> </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
						
						<div style="marign-top:100px"><h4 align="center"><label>hi！欢迎来到共享平台</label></h4></div>
						
	<div class="tab-box" id="myTab3"style="margin-top: 20px;">
    <ul class="nav nav-tabs king-nav-tabs2">
        <li class="">
            <a href="#tab3_1" data-toggle="tab">老师信息</a>
        </li>
        <li>
            <a href="#tab3_2" data-toggle="tab">课程评价</a>
        </li>
        
    </ul>
     <div class="tab-content mb20">
       <div class="tab-pane fade active in" id="tab3_1">
          
                                  <div class="container-fluid mb0 ">
                                                    <div class="row">
                                                        
														<div class="col-md-4"style="padding-top: 5px;">
														<img class="img-thumbnail" src="http://cdn.duitang.com/uploads/item/201406/07/20140607105205_zzxxK.thumb.600_0.jpeg">	
														</div>
														<div class="col-md-8"style="padding-top: 5px;">
														<label>徐晓辉</label>	
														</div>
														
                                                    </div>
                                                </div>
											<div class="container-fluid mb0 ">
												        <div class="row">
												            
															<div class="col-md-4"style="padding-top: 5px;">
															<img class="img-thumbnail " src="http://cdn.duitang.com/uploads/item/201409/12/20140912231628_JLxsX.thumb.700_0.png">	
															</div>
															<div class="col-md-8"style="padding-top: 5px;">
															<label>黄爽</label>	
															</div>
															
												        </div>
												    </div>
												    <div class="container-fluid mb0 ">
												        <div class="row">
												            
															<div class="col-md-4"style="padding-top: 5px;">
															<img class="img-thumbnail " src="http://cdn.duitang.com/uploads/item/201509/14/20150914131826_NTGxR.thumb.700_0.jpeg">	
															</div>
															<div class="col-md-8"style="padding-top: 5px;">
															<label>刘华俊</label>	
															</div>
															
												        </div>
												    </div>
												    <div class="container-fluid mb0 ">
												        <div class="row">
												            
															<div class="col-md-4"style="padding-top: 5px;">
															<img class="img-thumbnail " src="http://img5.duitang.com/uploads/item/201402/25/20140225001129_hnU2A.thumb.700_0.jpeg">	
															</div>
															<div class="col-md-8"style="padding-top: 5px;">
															<label>张影</label>	
															</div>
															
												        </div>
												    </div>
								
            </div>
       
        <div class="tab-pane fade " id="tab3_2">
           
            <div class="container-fluid mb0 ">
                                        <div class="row">
                                            
                                            <div class=""style="margin-top: 5px;">
                                                
								 <div class="king-instruction  king-instruction-info ">
								<br><label><b>邹心愿</b></label> 
								<br><label>讲的还是挺实用的，能学到很多东西，最后是论文方式，还要提交一份作品</label></div>
								<br><label><b></b></label>
								<div class="king-instruction  king-instruction-info ">
								<br><label>	<b>刘小菁</b></label> 
								<br><label>教的东西都是关于多媒体的，很实用，不点名，交作业和论文，给分很好</label></div>
								<br><label><b></b></label>
								<div class="king-instruction  king-instruction-info ">
								<br><label><b>匿名</b></label> 
								<br><label>最后有个论文和大作业，几个老师一起开的课，给分也不错</label></div>
								<br><label><b></b></label>
								<div class="king-instruction  king-instruction-info ">
								<br><label><b>匿名</b></label> 
								<br><label>	老师讲的很好，平时有小作业，期末论文一篇，就是高分不多</label></div>
								<br><label><b></b></label> 	
								<div class="king-instruction  king-instruction-info ">
                                                   <br><label><b>匿名</b></label> 
								                <br><label>不点名每节课都有作业不过是最后一起交的那种。  </label>
								                <br><label><b></b></label> 	
                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
									
								
            </div>
        </div>
                        
                        
						
						
						<div class="container-fluid mb0 "style="margin-top:40px">                            
							<div class="row">
                                <div class="col-md-12">
                                     
                                    	<div id="Layer1" style="position: absolute ; width:100%; height:200px; z-index:-1;"> 
										<div style="margin-right: 20px;">
                                     <img src="http://pic148.nipic.com/file/20171205/20711666_125238030000_2.jpg" height="100%" width="100%"/>    
                                   </div>
                                   
									</div>
									<table >
                                    <h5><tr><th style="padding-left:10px;padding-bottom:10px;">地点: </th><th style="padding-left: 20px;padding-bottom: 10px;"> 武汉大学 </th> </tr> 
                                    <tr> <th style="padding-left:10px;padding-bottom: 10px;">电话: </th> <th style="padding-left: 20px;padding-bottom: 10px;">XXXXXX </th> </tr> 
                                    <tr> <th style="padding-left:10px;padding-bottom: 10px;">邮编: </th> <th style="padding-left: 20px;padding-bottom: 10px;"> XXXXXX </th>
                                     <tr>  <th style="padding-left:10px;padding-bottom:10px;">邮箱: </th> <th style="padding-left: 20px;padding-bottom: 10px;"> XXXXX@qq.com</th> </tr> 
                                     </h5>
                                     </table>  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
    
    <script>
        $('.carousel').carousel()
    </script>
    <script>
        $(function(){
           var li = $('.navbar-nav li');
           li.each(function(){
           $(this).click(function(){
             if( $(this).hasClass('opens')){
               $(this).find('ul').slideUp(350);
               $(this).removeClass('opens');
             }else{
               $(this).find('ul').slideDown(350);
               $(this).addClass('opens');
                }
             })
            });
        })
		
    </script>
	</div>
</body>
</HTML>


