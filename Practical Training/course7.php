<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);
$template['css']=array('style/public.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$php='class1';

?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<HTML>
<head><style type="text/css">
#bg{
	width: 60px;
	height: 16px;
	background: url("img/star_gray.png");
}
#over{
	height:16px;
	background:url("img/star_org.png") no-repeat;
}
</style></head>
<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
		<div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:150%; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
        <div class="king-layout1-header">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"style="margin-left:-20px" >
						
                        <a href=""><img class="img-thumbnail " src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 100%;height:270px"> </a></div>
                    <div class="col-md-3"style="margin-left: 40px;">
                        <div  class="">
                        <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:270px; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
                            <h4>身边的材料学</h4>
                            <div style="padding-left: 20px;marign-top：0">
                            <br><label>武汉大学</label>
                            <br><label>动力与机械学院</label>
                            <br><label>科学与精神关怀</label>
                            <br><label>老师：肖文凯</label>
                            <br><label>课程ID：20182018155</label></div>
                             
                        <form class="form-horizontal">
                            <div class="form-group clearfix">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button type="button" class="king-btn mr10  king-success">选择课程</button>
                                    
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal">
                            <div class="form-group clearfix "style="margin-right: 60px;">
                                <label class="col-sm-3 control-label bk-lh30 pt0">评分：</label>
                 
                            
                                
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="king-layout2-main mt15" style="width:960px;">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="king-tab tab-box ">
                            <ul id="myTab2" class="nav nav-tabs king-nav-tabs1 king-tab-info">
                                <li class="active"> <a data-toggle="tab" href="#demo1">课程详情</a> </li>
                                <li> <a data-toggle="tab" href="#demo2">课程评价</a> </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane fade in active" id="demo1">
                                    <div class="king-instruction  king-instruction-info ">
                                     <p>课程信息</p>
									 <label>今天我们在不断前行、探索未来的同时，时常会驻足思考作为物质世界的发展史。我们周围的物质世界是如何发展到今天？构成物质世界的基础是材料，材料发展与人类文明进程有怎样的关系？未来的新材料又会怎样影响我们？本课程将会带来大家一起走进神奇的材料世界，探秘材料背后的精彩，发现身边的美好。
                                      </label>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程概论 </div>
                                        <div class="panel-body">
											<h6> 这是一门关于材料学知识的科普课，你可以通过身边所使用的物品，了解材料和认识材料；这也是一门有关科技发展史的课程，通过材料的发展历程，你会发现材料发展与时代变迁的关系；这也是一门创新实践课，你会发现你也可以有创新，能够有发明。



  从茶杯、纸张到家用电器、喷气发动机，我们的生活充满了材料。钢铁、纸、混凝土、塑料、玻璃、瓷器……这些我们都是一直静静地呆在我们身边，已经习以为常的材料，当材料的科学知识和它们给人的感官感受组合在一起，就会勾起人无限的好奇心，甚至它会让很多神奇的事情发生 。



   课程以日常生活中常见的几种物品为例，从材料发展历程、其中的科学原理入手，揭示各种物质背后的神奇结构，还告诉我们隐藏在背后的精采故事。为什么陶瓷容易碎裂，而钢筋可以多次折弯？是什么让橡皮筋有弹性？为什么不锈钢会不生锈？……



课程通过材料和人类发展、社会文化的关系，领略科技如何推动人类社会，了解材料如何影响我们生活，以全新的方式看待身边的每一样东西。课程科学性与趣味性相结合，以大量的图片和实例，通过生动的方式，展现材料之美，打开材料的神秘大门，让你能够领略到材料世界的魅力。

</h6>
											</div>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程大纲 </div>
                                        <div class="panel-body">
							<div>
										     <br><label>第一章 材料构筑了我们的世界</label>
                                              <br><label>第二章 透过玻璃看世界</label>
                                               <br><label>第三章 古老而现代的陶瓷</label>
                                                <br><label>第四章 作为基础的混凝土</label>
                                              <br><label>第五章 不屈不挠的金属</label>
                                               <br><label>第六章 充满活力的高分子材料</label>
                                               <br><label>第七章 令人惊叹的碳材料</label>
                                               <br><label>第八章  值得信赖的纸</label>
                                                 <br><label>第九章  超能力的气凝胶</label>
                                                   <br><label>第十章  不可思议的纳米材料</label>
                                               <br><label>第十一章  各显神通的能源材料</label>

											</div>
											
											
											</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade in" id="demo2" style=""> 
								<label><h1>4.8</h1></label>
								<div class="king-instruction  king-instruction-info ">
                                <br><label><b>匿名</b></label> 
								<br><label>不点名每节课都有作业不过是最后一起交的那种。  </label>
                                    </div>
								
								<br><label><b></b></label> 
								
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
								<br><label>	老师讲的很好，平时有小作业，期末论文一篇，就是高分不多</label></div>
								<br><label><b></b></label> 
								<div class="king-instruction  king-instruction-info ">
								<br><label><b>匿名</b></label> 
								<br><label>最后有个论文和大作业，几个老师一起开的课，给分也不错</label></div>
								<br><label><b></b></label> 
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container-fluid mb0 ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="king-tab tab-box ">
                                        <ul id="myTab2" class="nav nav-tabs king-nav-tabs1 king-tab-info">
                                            <li class="active"> <a data-toggle="tab" >授课老师</a> </li>
                                        </ul>
                                        <div class="tab-content ">
                                            
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
															<img class="img-thumbnail " src="http://cdn.duitang.com/uploads/item/201509/14/20150914131826_NTGxR.thumb.700_0.jpeg">	
															</div>
															<div class="col-md-8"style="padding-top: 5px;">
															<label>黄爽</label>	
															</div>
															
												        </div>
												    </div>
												    <div class="container-fluid mb0 ">
												        <div class="row">
												            
															<div class="col-md-4"style="padding-top: 5px;">
															<img class="img-thumbnail " src="http://cdn.duitang.com/uploads/item/201409/12/20140912231628_JLxsX.thumb.700_0.png">	
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mb0 ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="king-tab tab-box ">
                                        <ul id="myTab2" class="nav nav-tabs king-nav-tabs1 king-tab-info">
                                            <li class="active"> <a data-toggle="tab" >相关课程</a> </li>
                                        </ul>
                                        <div class="tab-content ">
                                          <div class="container-fluid mb0 ">
                                                  <div class="row">
                                                     <div class="col-md-4"style="padding-top: 5px;">
                                                    <img class="" src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                   <a href="course6.php"style="margin-left: 10px;">航空航天概论</a>
                                                    </div></div>
                                                  </div>
                                              </div>
											  	<div class="container-fluid mb0 ">
											          <div class="row">
											              
											  	    <div class="col-md-4"style="padding-top: 5px;">
                                                    <img class="" src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                    <a href="course2.php"style="margin-left: 10px;">自然计算方法导论</a>
                                                    </div></div>
											          </div>
											      </div>
											      <div class="container-fluid mb0 ">
											          <div class="row">
											              
											  	    <div class="col-md-4"style="padding-top: 5px;">
                                                    <img class="" src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                  	<a href="course4.php"style="margin-left: 10px;">信息安全概论</a>
                                                    </div></div>
											          </div>
											      </div>
											      <div class="container-fluid mb0 ">
											          <div class="row">
											              
											  	    <div class="col-md-4"style="padding-top: 5px;">
                                                    <img class="" src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                    <a href="course5.php"style="margin-left: 10px;">计算机思维导论</a>
                                                    </div></div>
											          </div>
											      </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</HTML>