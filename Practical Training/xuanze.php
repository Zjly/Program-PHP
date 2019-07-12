
<?php
header("Content-Type: text/html; charset=utf-8");
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
include_once 'inc/page.inc.php';

$link=connect();
$member_id=is_login($link);

$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
   
}
$php='xuanze';
?>




<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../assets/css/layui.css">
    <link rel="stylesheet" href="../assets/css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <link href="css/style.css" rel="stylesheet" />
    <title>管理后台</title>
    <script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/ui.js"></script>

    <script type="text/javascript" src="admin/pagination.js"></script>

    <script type="text/javascript">
        //全局变量
        var numCount;       //数据总数量
        var columnsCounts;  //数据列数量
        var pageCount;      //每页显示的数量
        var pageNum;        //总页数
        var currPageNum ;   //当前页数

        //页面标签变量
        var blockTable;
        var preSpan;
        var firstSpan;
        var nextSpan;
        var lastSpan;
        var pageNumSpan;
        var currPageSpan;



        window.onload=function(){
            //页面标签变量
            blockTable = document.getElementById("blocks");
            preSpan = document.getElementById("spanPre");
            firstSpan = document.getElementById("spanFirst");
            nextSpan = document.getElementById("spanNext");
            lastSpan = document.getElementById("spanLast");
            pageNumSpan = document.getElementById("spanTotalPage");
            currPageSpan = document.getElementById("spanPageNum");

            numCount = document.getElementById("blocks").rows.length - 1;       //取table的行数作为数据总数量（减去标题行1）
            //alert(numCount);可以弹出窗口说明总数
            columnsCounts = blockTable.rows[0].cells.length;
            pageCount = 5;
            pageNum = parseInt(numCount/pageCount);
            if(0 != numCount%pageCount){
                pageNum += 1;
            }

            firstPage();
        };
    </script>

	
</head>

<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->
<?php include_once 'inc/leaft_head.php'; ?>
	
<!-- right begin -->
<div class="ydc-column ydc-column-8">
	<div class="ydc-release-content">
		<div class="ydc-tabPanel ydc-tabPanel-release">
			<!--显示界面头部-->
			<div class="ydc-release-tab-head">
				<ul>
					<li class="hit">选择课程</li>
				</ul>
				<div class="ydc-release-amount">
					<span>
						今日已选课程数量：<em>0</em>
						/6 <a href="standard.php" target="_blank">选课规则</a>
					</span>
				</div>
			</div>
			
			<div class="ydc-panes">
				<div class="ydc-pane" style="display:block;">
					<!--搜索框-->
					<div class="clearfix">
						<form method="post">
							<div class="fl ydc-group-input">
							
								<input type="text" name="search" id = "search" placeholder="请输入关键词进行课程查询搜索" list = "course" onkeyup="showResult(this.value)" autocomplete="off">
								
	
								<button name="submit" type="submit" class="ydc-group-button">搜 索</button>
								
							</div>
								<button name="tuijian" style = "margin-left:100"type="submit" class="ydc-group-button">自动推荐</button>
							<div class="col-md-10">
								<nav>
									<ul class="dropdown">
										<div id="livesearch" style="color:blue;overflow:auto;font-size:15;font-style:normal;margin-left:-10;width:400px;height:130px;background:#ffffff;position:relative;left:0px;top:0px;border-radius:4px;box-shadow:0px 0px  5px 1px #aaa;"></div>
									</ul>
								</nav>
							</div>

						</form>
					</div>
				
					<!--课程表-->
					<div class="ydc-group-table">
					
						<div id="main" style = "margin-left:0px;font-size:15px;width:930">
							<div class="title" style = "font-size:20px">课程</div>
								<form method="post">
									<div class="container">
										<table  id="blocks" class="list" style="margin-top:25px;width:950px;table-layout:fixed">

											<tr>
												<th style = "width:100px"><h4>课程序号</h4></th>	 	 	
												<th style = "width:400px"><h4>名字</h4></th>
												<th><h4>任课老师</h4></th>
												<th><h4>院系</h4></th>
												<th><h4>操作</h4></th>
											</tr>

										
<!--读取数据库-->									
<?php if(isset($_POST['submit'])){
	$query="select count(*) from CM_course where course_name like '%{$_POST['search']}%' ";
	$count_all=num($link,$query);
	$query="select * from CM_course where course_name like '%{$_POST['search']}%'";
	$result=execute($link,$query);
	while ($data=mysqli_fetch_assoc($result)){
		$query="select * from CM_course where cID='{$data['cID']}'";
		$result2=execute($link,$query);
		$M=mysqli_fetch_array($result2);
		$query="select * from CM_teacher where tID='{$M['tID']}'";
		$result3=execute($link,$query);
		$T=mysqli_fetch_array($result3);		    
		$url=urlencode("xuanze_add.php?id={$data['cID']}");
		$return_url=urlencode($_SERVER['REQUEST_URI']);
		$message="你真的要选择这门课嘛 {$data['course_name']} 吗？";
		$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
		$info_url="courseinfo.php?cID={$data['cID']}";
				
		
			
$html=<<<A
			<tr>
				<td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				<td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				<td></br><h5>{$T['teacher_name']}</h5></td>
				<td></br><h5>{$M['course_college']}</h5></td>
				<td></br><div class="alert open" style="color:#00F" onclick="mizhu.open(200, 450, '</br>课程详情', '$info_url');"><h5>[查看详细]</h5></div><a href="$add_url"><h5>[选课]</h5></a></td>
		                                    
			</tr>


										
				
A;
		echo $html;
										
		}
$html2=<<<A
</table>
<div id="pagiDiv" align="left" style="width:1200px;margin-left:180px">
        		<span id="spanFirst" class="ydc-previous-item-btn-medium">First</span>  
        		<span id="spanPre" class="ydc-previous-item-btn-medium">Pre</span>  
        		<span id="spanNext" class="ydc-previous-item-btn-medium">Next</span>  
        		<span id="spanLast" class="ydc-previous-item-btn-medium">Last</span>  
       		 The <span id="spanPageNum" class="ydc-previous-item-btn-medium cur"></span> Page/Total <span id="spanTotalPage" class="ydc-previous-item-btn-medium "></span> Page
        </div>
A;
		echo $html2;

	}
	else if(isset($_POST['tuijian'])){
		   if(@$_COOKIE['cookie']['name']==NULL){echo "<script type='text/javascript'>alert('请登陆');</script>";return;
        }
		$page=page(3,5);
		$query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
		$result=execute($link,$query);
		$student_number=mysqli_fetch_array($result);
		if($student_number==null){
			echo "<script type='text/javascript'>alert('请登陆');</script>";return;
		}
		$set_charset = 'export LANG=en_US.UTF-8;';
   		$cmd = "/usr/bin/python3.5 /var/www/test/python/collaborative_filtering_algorithm.py {$student_number['student_number']}";
		exec($set_charset.$cmd, $out, $res);
		$i=0;
     while($i<=2)
		{
			$data = $out[$i];
			$query="select * from CM_course where cID='{$data}'";
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);
		    $query="select * from CM_teacher where tID='{$M['tID']}'";
		    $result3=execute($link,$query);
		    $T=mysqli_fetch_array($result3);
			$url=urlencode("xuanze_add.php?id={$data}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$M['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			$info_url="courseinfo.php?cID={$data}";
			$i++;	
		
			
$html=<<<A
			<tr>
				<td></br><input class="sort" type="button" name="sort[{$data}]" value="{$data}"  style = "margin-left:12px;font-size:10px"/></td>
				<td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				<td></br><h5>{$T['teacher_name']}</h5></td>
				<td></br><h5>{$M['course_college']}</h5></td>
				<td></br><div class="alert open" style="color:#00F" onclick="mizhu.open(200, 450, '</br>课程详情', '$info_url');"><h5>[查看详细]</h5></div><a href="$add_url"><h5>[选课]</h5></a></td>
		   	</tr>

				
A;
			echo $html;
		}
$html2=<<<A
</table>
A;
		echo $html2;


		
	}else{
		$query="select count(*) from CM_course ";
		$count_all=num($link,$query);
		$page=page($count_all,5);
		$query="select * from CM_course {$page['limit']}";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
		    $query="select * from CM_course where cID='{$data['cID']}'";
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);
		    $query="select * from CM_teacher where tID='{$M['tID']}'";
		    $result3=execute($link,$query);
		    $T=mysqli_fetch_array($result3);
			$url=urlencode("xuanze_add.php?id={$data['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$data['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			$info_url="courseinfo.php?cID={$data['cID']}";
				
		
			
$html=<<<A
			<tr>
				<td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				<td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				<td></br><h5>{$T['teacher_name']}</h5></td>
				<td></br><h5>{$M['course_college']}</h5></td>
				<td></br><div class="alert open" style="color:#00F" onclick="mizhu.open(200, 450, '</br>课程详情', '$info_url');"><h5>[查看详细]</h5></div><a href="$add_url"><h5>[选课]</h5></a></td>
		   	</tr>
				
A;
			echo $html;
		}
$html2=<<<A
</table>
A;
		echo $html2;
}
		
		?>
		
<div id="pageDiv" align="left" style="width:1200px;display:none" >
        <span id="spanFirst"></span>  
        <span id="spanPre"></span>  
        <span id="spanNext"></span>  
        <span id="spanLast"></span>  
        The <span id="spanPageNum"></span> <span id="spanTotalPage"></span> 
 </div>



										
										
										
									</div>
<?php
	echo $page['html'];
?>
										
	
								</form>
										
                           				 </div>
						</div>
					</div>
					
				</div>
				<!-- 该部分为好看的分页样式，功能未实现，已在page.inc.php中实现
				<div class="ydc-pagination">
					<ol>
						<li class="ydc-previous-item">
							<button class="ydc-previous-item-btn-medium ydc-disabled">
								<span>上一页</span>
							</button>
						</li>
						<li>
							<button class="ydc-previous-item-btn-medium cur">1</button>
						</li>
						<li>
							<button class="ydc-previous-item-btn-medium">2</button>
						</li>
						<li>
							<button class="ydc-previous-item-btn-medium">3</button>
						</li>
						<li class="ydc-previous-item">
							<button class="ydc-previous-item-btn-medium">
								<span>下一页</span>
							</button>
						</li>
						<li class="ydc-item-quick">
							第<div class="ydc-item-quick-kun"><input type="number" aria-invalid="false" class=""></div>页
							<button style="margin-left:5px;" class="ydc-previous-item-btn-medium">
								<span>跳转</span>
							</button>
						</li>
					</ol>
				</div>
				-->
				
				<!--广告
				<div class="ydc-right-banner">
					<div class="slideshow-container">
						<a href="https://baidu.com/" target="_blank" class="mySlides fade">
							<img src="person/images/ad/ad1.jpg" style="width:100%">
						</a>
						<a href="https://baidu.com" target="_blank" class="mySlides fade">
							<img src="person/images/ad/ad2.jpg" style="width:100%">
						</a>
						<a href="http://www.baidu.com/" target="_blank" class="mySlides fade">
							<img src="person/images/ad/ad3.jpg" style="width:100%">
						</a>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
<?php include_once 'inc/leaft_head_end.php';?>
<!-- content YDC end -->
	<script type="text/javascript" src="person/js/jquery.min.js"></script>
	<!--广告弃用

	<script type="text/javascript">
	    var slideIndex = 0;
	    showSlides();
	    function showSlides() {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        for (i = 0; i < slides.length; i++) {
	            slides[i].style.display = "none";
	        }
	        slideIndex++;
	        if (slideIndex> slides.length) {slideIndex = 1}
	        slides[slideIndex-1].style.display = "block";
	        setTimeout(showSlides, 3000); // 滚动时间
	    }
	</script>
	-->
	<script type="text/javascript">
	    $(function(){
			document.getElementById("livesearch").style.visibility="hidden";
			var bool = 1;
			while(bool == 1){
				if(document.getElementById("seache").value != ''){	
				document.getElementById("livesearch").style.visibility="visible";
				bool = 0;
				}
			}
			
			
	        $('.ydc-tabPanel ul li').click(function(){
	            $(this).addClass('hit').siblings().removeClass('hit');
	            $('.ydc-panes>div:eq('+$(this).index()+')').show().siblings().hide();
	        })
	    })

	    function showResult(str)
	    {
				 
	        if (str.length==0)
	        { 
				
	            document.getElementById("livesearch").innerHTML="";
	            document.getElementById("livesearch").style.border="0px";
				document.getElementById("livesearch").style.visibility="hidden";
	            return;
	        }
			document.getElementById("livesearch").style.visibility="visible";
	        if (window.XMLHttpRequest)
	        {// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
	            xmlhttp=new XMLHttpRequest();
	        }
	        else
	        {// IE6, IE5 浏览器执行
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange=function()
	        {
	            if (xmlhttp.readyState==4 && xmlhttp.status==200)
	            {
	                document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	                document.getElementById("livesearch").style.border="1px solid #66aaff";
	                document.getElementById("livesearch").style.borderTopWidth="1px";
	            }
	        }
	        xmlhttp.open("GET","livesearch.php?q="+str,true);
	        xmlhttp.send();
	    }
	  
	</script>

</body>
</html>




