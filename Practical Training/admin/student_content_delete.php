<?php //课程删除
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('father_module.php','error','id参数错误！');
}
$link=connect();
$member_id=is_login_manage($link);
if($member_id==NULL){
    skip('/test/index.php','error','非法登陆');
}
$query="delete from CM_comment where commentID={$_GET['id']}";
execute($link,$query);
if(mysqli_affected_rows($link)==1){
	skip('student_content.php','ok','恭喜你删除成功！');
}else{
	skip('student_content.php','error','对不起删除失败，请重试！');
}
?>