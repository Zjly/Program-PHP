<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
include_once 'inc/page.inc2.php';
$link=connect();
if($_COOKIE['cookie']['name']==null)
{
	skip('login.php','error','请登陆后再选课');
}
$date = date('/ymd');
$path="json{$date}{$_COOKIE['cookie']['name']}.json";
//if(file_exists($path)){
$json = file_get_contents($path);
if($json){
	echo $json;
}else{
if(1){
$query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
$result=execute($link,$query);
$student_number=mysqli_fetch_array($result);
}
$query = "select * from CM_student_course where student_number='{$student_number['student_number']}'";
$result=execute($link,$query);
$day=date('ymd', time());
$series=array();
$xAxis=array();
 for($i = 7 ;$i>0;$i--){
$a = date("ymd",strtotime("-{$i} day"));
array_push($xAxis,$a);
}
while($student_course=mysqli_fetch_array($result))
{
	$query = "select * from CM_course where cID='{$student_course['cID']}'";
	$result2=execute($link,$query);
	$course=mysqli_fetch_array($result2);
	 $time =array();
	 for($i = 7 ;$i>0;$i--){
	$a = date("ymd",strtotime("-{$i} day"));
	 $query = "select * from CM_study_history where course_id='{$course['course_id']}' and day = {$a}";
	$result1=execute($link,$query);
	$study_time=mysqli_fetch_array($result1);
	 if($study_time==null)
	 {
		 array_push($time,0);
	 }else{
		 array_push($time,$study_time['time']);
	 }
	 }
	 $type=array("type"=>"default");
	 $areaStyle=array("areaStyle"=>$type);
	 $normal=array("normal"=>$areaStyle);
	$course = array("name"=>$course['course_name'],"type"=>"line","stack"=>"总量","itemStyle"=>$normal,"data"=>$time);
	array_push($series,$course);
}
$data=array("xAxis"=>$xAxis,"series"=>$series);
$json= json_encode(array("code"=>0,"result"=>true,"messge"=>"success","data"=>$data),JSON_UNESCAPED_UNICODE);
file_put_contents($path,$json);
echo $json;
}
?>