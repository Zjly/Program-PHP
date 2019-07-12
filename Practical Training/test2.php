<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
include_once 'inc/page.inc2.php';
$link=connect();
if (@$_COOKIE['member_id']!='院系管理' or $_COOKIE['member_id']!='管理员'  ){ skip('index.php','error','非法');}
$query="select * from CM_course ";
$result=execute($link,$query);





$dom = new DOMDocument('1.0','UTF-8');
$pages=$dom->createElement('pages');

while($A=mysqli_fetch_array($result)){


$link=$dom->createElement('link');
$title=$dom->createElement('title',"{$A['course_name']}");
$url=$dom->createElement("url","http://49.234.117.53/test/course_all.php?cID={$A['cID']}");
 $link->appendChild($title);
 $link->appendChild($url);
 $pages->appendChild($link);

}
$dom->appendChild($pages);
 $result=$dom->save('links.xml');
var_dump($result);
 skip('admin/father_module.php','ok','课程更新')
?>