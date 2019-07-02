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
		<div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:130%; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
        <div class="king-layout1-header">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"style="margin-left:-20px" >
						
                        <a href=""><img class="img-thumbnail " src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100"style="width: 100%;height:270px"> </a></div>
                    <div class="col-md-3"style="margin-left: 40px;">
                        <div  class="">
                        <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:270px; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
                            <h4>计算机思维导论</h4>
                            <div style="padding-left: 20px;marign-top：0">
                            <br><label>武汉大学</label>
                            <br><label>计算机学院</label>
                            <br><label>科学精神与生命关怀</label>
                            <br><label>老师：刘华俊</label>
                            <br><label>课程ID：20182021301</label></div>
                             
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
									 <label>计算手段已发展为与理论手段和实验手段并存的科学研究的第三种手段，计算思维已成为各专业学生都应掌握的思维方式。本课程用通俗易懂、趣味案例、深入浅出的方式，介绍计算学科所蕴含的经典的计算思维，属于面向全体本科生开设的计算机系列课程中第一层次的课程，是本科生必修的通识教育课程。
                                      </label>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程概论 </div>
                                        <div class="panel-body">
											<h6>1)大学计算机是面向大学一年级学生开设的，与大学数学、大学物理有一样地位的通识类思维教育课程。它不是讲授计算机及其软件(如Office，Access，IE等)如何使用的课程；它也不是仅仅训练学生程序设计内容的课程；它是讲授每个大学生都应具备的计算思维的课程，大学生创造性思维培养离不开计算思维的培养。

(2)计算思维是互联网与信息时代每个人都应具备的一种思维方式。互联网公司(如阿里巴巴、Facebook、Apple、腾讯等)的成功应归属于计算思维运用的成功；1998年和2013年的诺贝尔化学奖授予一个计算手段的研究者说明：计算思维对非计算机学科人才实现复合性跨学科创新是非常重要的。

(3)大学阶段应更多地训练“思维”，而不应仅着眼于“知识”即事实的学习。计算机学科知识的膨胀速度是非常快的，“知识”的学习必须有所选择，因此应学习计算机学科经典的、对人们现在和未来有深刻影响的思维模式；“知识”随着“思维”讲解而介绍,“思维”随着“知识”的贯通而形成，“能力”随着“思维”的理解而提高。
</h6>
											</div>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程大纲 </div>
                                        <div class="panel-body">
							<div>
										     <br><label>第一章 计算机、计算与计算思维</label>
                                              <br><label>第二章 符号化、计算化与自动化</label>
                                               <br><label>第三章 程序与递归：组合、抽象与构造</label>
                                                <br><label>第四章 冯.诺依曼计算机—机器级程序及其执行</label>
                                              <br><label>第五章 现代计算机—复杂环境下程序执行</label>
                                               <br><label>第六章由机器语言到高级语言---程序编写编译</label>
                                               <br><label>第七章 算法-程序与计算系统之灵魂</label>
                                               <br><label>第八章 问题-算法与环境：排序算法研究示例</label>
                                                <br><label>第九章 难解性问题求解：遗传算法研究示例</label>
                                              <br><label>第十章 怎样管理和利用数据I</label>
                                               <br><label>第十一章 怎样管理和利用数据II</label>
                                                <br><label>第十二章怎样连接和利用网络I</label>
                                              <br><label>第十三章 怎样连接和利用网络II</label>
                                              

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
                                                    <img class="" src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                   <a href="course1.php"style="margin-left: 10px;">物联网应用及安全</a>
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
                                                    <img class="" src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                    <a href="course5.php"style="margin-left: 10px;">C语言程序设计</a>
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