
<?php
include_once 'headstyle.inc.php';
$member_id=is_login($link);
//  var_dump(isset($member_id));
//  var_dump($member_id);
if(isset($member_id) && $member_id){
   
   
    if($_COOKIE['cookie']['member_id']=='管理员' or $_COOKIE['cookie']['member_id']=='院系管理员'
        ){
        
    
$str=<<<A
						<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                            
                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="/test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a class="f14">
                                        <span>您好！{$_COOKIE['cookie']['name']}{$_COOKIE['cookie']['member_id']}</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                        <li>
                                <a href="javascript:;">
                                    <img src="" class="avatar">
                                    <span>管理者 ( admin )</span>
                                </a>
                            </li>      
                                <li>
                                    <a href="/test/logout.php" class="f14">
                                        <span>注销</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                                            
                        </div>
                                            
                    </div>
                </div>
            </nav>
        </div>
        
</body>

</html>
A;
					echo $str;		
				}else
                {
                    @$query="select * from CM_register where register_name='{$_COOKIE['cookie']['name']}'";
                    $result_memebr=execute($link, $query);
                    
                    $data_member=mysqli_fetch_assoc($result_memebr);
                if( $data_member['register_photo']==NULL){
                    $str=<<<A
					<html>
                    
                    
                    
<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                    
                        </div>
                    
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="/test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li class="active">
                                    <a href="/test/person.php" class="f14">
                                        <span>个人中心</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a class="f14">
                                        <span>您好！{$_COOKIE['cookie']['name']}</span>
                    
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                              <li>
                                <a href="javascript:;">
                                    <img src= "images/touxiang2.jpg"  style="width:45px;height:45px;"class="avatar">
                    
                                </a>
                            </li>
                                <li>
                                    <a href="/test/logout.php" class="f14">
                                        <span>注销</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
                    
</body>
                    
</html>
A;
                    echo $str;               
                }else{
					?>
    
<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">

                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="/test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li class="active">
                                    <a href="/test/person.php" class="f14">
                                        <span>个人中心</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a class="f14">
                                        <span>您好！<?php echo $_COOKIE['cookie']['name'] ?></span>
                                            
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                              <li>
                                <a href="javascript:;">
                                    <img src="<?php if($data_member['register_photo_small']!=''){echo SUB_URL.$data_member['register_photo_small'];}else if($data_member['register_photo']!=''){echo SUB_URL.$data_member['register_photo'];}else{echo '../style/photo.jpg';}?> "  style="width:45px;height:45px;border-radius:50%"class="avatar">
                                    
                                </a>
                            </li>
                                <li>
                                    <a href="/test/logout.php" class="f14">
                                        <span>注销</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
</body>

</html>
<?php
					echo $str;		
                } }}else{
					?>
<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                           
                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="/test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="/test/login.php" class="f14">
                                        <span>登录</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="../test/register.php" class="f14">
                                        <span>注册</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
        <script>
        $(function(){
            var li = $('.navbar-nav li');
            li.each(function(){
                $(this).click(function(){
                    if( $(this).hasClass('opens') && $(this).find('ul li').length !=0){
                        $(this).find('ul').slideUp(250);
                        $(this).removeClass('opens');
                    }else if($(this).find('ul li').length !=0){
                        $(this).find('ul').slideDown(250);
                        $(this).addClass('opens');
                        $(this).siblings('li').removeClass('opens').find('ul').slideUp();
                    }
                });
            });
        })
    </script>
</body>

</html>
<?php
					echo $str;}
?>