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
						
                        <a href=""><img class="img-thumbnail " src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 100%;height:270px"> </a></div>
                    <div class="col-md-3"style="margin-left: 40px;">
                        <div  class="">
                        <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:270px; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
                            <h4>航空航天概论</h4>
                            <div style="padding-left: 20px;marign-top：0">
                            <br><label>武汉大学</label>
                            <br><label>电子与信息学院</label>
                            <br><label>科学与精神关怀</label>
                            <br><label>老师：周辉</label>
                            <br><label>课程ID：20182022193</label></div>
                             
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
									 <label>航空航天是二十世纪以来发展最为迅速、应用最为广泛、对人类社会生活影响最大的科技领域之一。 航空航天概论将为大家展示航空航天发展的壮丽史诗和人类探索太空的艰辛历程，通过航空航天基本知识和飞行器科学与技术的学习，领略航空航天的魅力，体会人类不断探索的奋斗精神，畅想太空的奥秘和未来。
                                      </label>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程概论 </div>
                                        <div class="panel-body">
											<h6> 航空航天是人类拓展和探索大气层及宇宙空间的产物，代表着最先进的科学技术领域。航空航天概论主要讲述了航空航天基本概念、航空航天发展概况、飞行器的飞行原理、动力系统、构造及其机载设备等方面的基本知识、基本原理和常用技术。通过课程的学习，可以使学生对航空航天的基本知识和基本技术有一个比较全面的了解，同时也可以掌握航空航天技术的最新发展动态和发展趋势，是学生了解航空航天知识的重要窗口，也是培养学生对航空航天兴趣和爱好，激发学生热爱航空、献身航空的有效途径。


</h6>
											</div>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程大纲 </div>
                                        <div class="panel-body">
							<div>
										     <br><label>第一章 航空航天发展概况</label>
                                              <br><label>第二章 升力与阻力的产生</label>
                                               <br><label>第三章 飞机气动布局及飞行性能</label>
                                                <br><label>第四章 直升机飞行原理与航天器飞行原理</label>
                                              <br><label>第五章 航空器动力装置</label>
                                               <br><label>第六章 航天器动力装置</label>
                                               <br><label>第七章 飞行器导航与制导</label>
                                               <br><label>第八章 飞行器构造</label>
                                               

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
                                                    <img class="" src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                   <a href="course7.php"style="margin-left: 10px;">身边的材料学</a>
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