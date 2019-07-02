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
						
                        <a href=""><img class="img-thumbnail " src="https://edu-image.nosdn.127.net/C2E910CE23079A4D477A111FF2980735.png?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100"style="width: 100%;height:270px"> </a></div>
                    <div class="col-md-3"style="margin-left: 40px;">
                        <div  class="">
                        <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:270px; z-index:-1">    
		<img src="http://www.pptbz.com/d/file/p/201708/small7d1a2bf18ed25a3e1ec98d8b2cc0b609.jpg"  style=" width:100%;height:100% ;">    
		</div>
                            <h4>遥感技术应用及发展</h4>
                            <div style="padding-left: 20px;marign-top：0">
                            <br><label>武汉大学</label>
                            <br><label>遥感信息工程学院</label>
                            <br><label>科学精神与生命关怀</label>
                            <br><label>老师：龚涛</label>
                            <br><label>课程ID：20182023104</label></div>
                             
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
									 <label>本课程以小专题的形式，选取部分典型遥感技术应用，每周讲授一章，带领大家一同探索其中的科学进步历程。
                                      </label>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程概论 </div>
                                        <div class="panel-body">
											<h6>   本课程为通识类教育课程，授课对象为本科学生，主要针对理工类学生开设，同时兼顾对遥感技术感兴趣的文科相关专业学生。课程目标是普及遥感科学相关知识，通过对遥感技术应用的一般性介绍让不具备系统专业知识的听众走进遥感、了解遥感，扩宽知识视野，启迪科学思维。
											
</h6>
											</div>
                                    </div>
                                    <div class="panel panel-default mb0">
                                        <div class="panel-heading"> 课程大纲 </div>
                                        <div class="panel-body">
							<div>
										     <br><label>第一章 地物色彩与光谱的奥秘</label>
                                              <br><label>第二章 擦亮遥感卫星的眼睛</label>
                                               <br><label>第三章 给地球量体温</label>
                                                <br><label>第四章 九天之外的火眼金睛</label>
                                              <br><label>第五章 遥感卫星带你看地球</label>
                                           
                                               

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
                                                    <img class="" src="https://edu-image.nosdn.127.net/288647B04DED46F53F2154ABF422099B.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100"style="width: 80px;height:50px">	
                                                    </div>
                                                    <div class="col-md-8" >
                                                    <div style="margin-left:5px;padding-top:20px">
                                                    <a href="course8.php"style="margin-left: 10px;">宇宙新概念</a>
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