
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);
if(!isset($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$php='lishi';
?>




<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<!DOCTYPE html>
<html>


<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>
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
       
    </script>
</head>
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">
							<div class="ydc-release-tab-head">
							
								
							</div>
							<div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
								<div ><h4><label>课程学习记录</label></h4></div>	
									<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/echarts-2.0/echarts-all.js"></script>

<div id="chart8_demo1" style="height: 500px; padding: 10px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;" _echarts_instance_="1562644559670">
    <div style="position: relative; overflow: hidden; width: 1268px; height: 500px;">
        <div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 1268px; height: 500px; user-select: none;"></div>
        <canvas width="1268" height="500" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 1268px; height: 500px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
        <canvas width="1268" height="500" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 1268px; height: 500px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
        <canvas width="1268" height="500" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 1268px; height: 500px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
        <div class="echarts-dataview" style="position: absolute; display: block; overflow: hidden; transition: height 0.8s ease 0s, background-color 1s ease 0s; z-index: 1; left: 0px; top: 0px; width: 1268px; height: 0px; background-color: rgb(240, 255, 255);"></div>
        <div class="echarts-tooltip zr-element" style="position: absolute; display: none; border-style: solid; white-space: nowrap; transition: left 0.4s ease 0s, top 0.4s ease 0s; background-color: rgba(0, 0, 0, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); padding: 5px; left: 1014px; top: 261px;">周六
            </div>
    </div>
</div>
<script>
// Step:4 动态加载echarts然后在回调函数中开始使用，注意保持按需加载结构定义图表路径
function createEAreaChart(conf){   
    //--- 区域图 ---
    var myChart = echarts.init(document.getElementById(conf.selector));
    var legendData = [] 
    for(var i = 0; i < conf.data.series.length;i++){
        legendData.push(conf.data.series[i].name)
    }
       myChart.setOption({
        title : {
            text: conf.data.text
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:legendData
        },
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : conf.data.xAxis
            }
        ],
        toolbox: {
            show : true,
			y:'bottom',
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : conf.data.series
    });
}
function initEAreaChart(conf){
    $.ajax({
        url: conf.url,
        type: 'GET',
        dataType: conf.dataType,
        success: function(res){
            //获取数据成功
			console.log(res);
            if (res.result){
                var data = res.data;
                createEAreaChart({
                    selector: conf.containerId, // 图表容器
                    data: data, // 图表数据
                });
            }
        },
		error:function(res){
		}
    });
}
$(function(){
    initEAreaChart({
        url: 'echart.php',
        dataType: 'json',
        containerId: 'chart8_demo1'
    });   
});
//chart8_demo1_js_end
</script>

									</div>
								</div></div></div></div>
