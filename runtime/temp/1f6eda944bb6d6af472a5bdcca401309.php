<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpStudy\WWW\ylinmfg\public/../application/index\view\index\test.html";i:1511852582;s:73:"D:\phpStudy\WWW\ylinmfg\public/../application/index\view\comm\footer.html";i:1511421844;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>开始使用layui</title>
    <link rel="stylesheet" href="__LAY__/css/layui.css">
    <script src="__LAY__/layui.js"></script>
    <script src="__JS__/jquery-1.10.2.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <style>
        .hed{
            padding: 0;
            margin: 0;
        }
        .nav{
            width: 100%;
        }
        .nav li{
            float: left;
            background: gainsboro;
            text-align: center;
            width: 25%;
        }
        .a{
         background: yellow;
            padding: 0;
            text-align: center;
        }
        .b{
         background: gray;
         margin-top: 10px;
            text-align: center;
        }
        .c{
            margin-top: 10px;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="layui-container hed">
    <div class="layui-row ">
        <div class="layui-carousel" id="test1">
            <div carousel-item>
                <div><img src="__IMAGES__/pc1.jpg" /></div>
                <div><img src="__IMAGES__/pc2.jpg"/></div>
                <div><img src="__IMAGES__/pc3.jpg"/></div>
                <div><img src="__IMAGES__/pc4.jpg"/></div>
                <div><img src="__IMAGES__/pc5.jpg"/></div>
            </div>
        </div>
    </div>
    <div class="layui-row ">
        <div class="layui-col-xs12 " style="padding: 0;">
            <ul class="nav" >
                <li class="layui-nav-item "><a href="">最新活动</a></li>
                <li class="layui-nav-item layui-this"><a href="">产品</a></li>
                <li class="layui-nav-item"><a href="">大数据</a></li>
                <li class="layui-nav-item"><a href="">社区</a></li>
            </ul>
        </div>
    </div>

    <div class="layui-row a">
        <div class="layui-col-md9 layui-col-xs6 ">
         a
        </div>
        <div class="layui-col-md3 layui-col-xs6 ">
            b
        </div>
    </div>
    <div class="layui-row b">
        <div class="layui-col-xs6 ">
           1
        </div>
        <div class="layui-col-xs6">
           2
        </div>
    </div>
    <div class="layui-row c">
        <div class="layui-col-xs12 ">
            <ul class="layui-timeline">
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月18日</h3>
                        <p>
                            layui 2.0 的一切准备工作似乎都已到位。发布之弦，一触即发。
                            <br>不枉近百个日日夜夜与之为伴。因小而大，因弱而强。
                            <br>无论它能走多远，抑或如何支撑？至少我曾倾注全心，无怨无悔 <i class="layui-icon"></i>
                        </p>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月16日</h3>
                        <p>杜甫的思想核心是儒家的仁政思想，他有“<em>致君尧舜上，再使风俗淳</em>”的宏伟抱负。个人最爱的名篇有：</p>
                        <ul>
                            <li>《登高》</li>
                            <li>《茅屋为秋风所破歌》</li>
                        </ul>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月15日</h3>
                        <p>
                            中国人民抗日战争胜利72周年
                            <br>常常在想，尽管对这个国家有这样那样的抱怨，但我们的确生在了最好的时代
                            <br>铭记、感恩
                            <br>所有为中华民族浴血奋战的英雄将士
                            <br>永垂不朽
                        </p>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月15日</h3>
                        <p>
                            中国人民抗日战争胜利72周年
                            <br>常常在想，尽管对这个国家有这样那样的抱怨，但我们的确生在了最好的时代
                            <br>铭记、感恩
                            <br>所有为中华民族浴血奋战的英雄将士
                            <br>永垂不朽
                        </p>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月15日</h3>
                        <p>
                            中国人民抗日战争胜利72周年
                            <br>常常在想，尽管对这个国家有这样那样的抱怨，但我们的确生在了最好的时代
                            <br>铭记、感恩
                            <br>所有为中华民族浴血奋战的英雄将士
                            <br>永垂不朽
                        </p>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <h3 class="layui-timeline-title">8月15日</h3>
                        <p>
                            中国人民抗日战争胜利72周年
                            <br>常常在想，尽管对这个国家有这样那样的抱怨，但我们的确生在了最好的时代
                            <br>铭记、感恩
                            <br>所有为中华民族浴血奋战的英雄将士
                            <br>永垂不朽
                        </p>
                    </div>
                </li>
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                    <div class="layui-timeline-content layui-text">
                        <div class="layui-timeline-title">过去</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="layui-row">
        <div ng-app="myApp" ng-controller="myCtrl">
        <table class="layui-table">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>昵称</th>
            <th>电话</th>
            <th>项目</th>
        </tr>
        </thead>
        <tbody>
            <tr ng-repeat="x in res| orderBy : 'xin_name'">
                <td>{{ x.xin_name }}</td>
                <td>{{ x.xin_tel}}</td>
                <td>{{ x.xin_item }}</td>
            </tr>

        </tbody>
    </table>
        </div>
    </div>
</div>
<style>
    #btn{
        top:50%;z-index:10;position: fixed;right: -58px;

    }
    #btn img{
        width: 50%;
        height: 50%;
    }
</style>
<div  id="btn">
    <img src="__IMAGES__/to_pup.png">
</div>
<script>
    document.getElementById('btn').onclick=function(){
        timer=setInterval(function(){
            var scrollTop=document.documentElement.scrollTop||document.body.scrollTop

            var ispeed=Math.floor(-scrollTop/6);
            if(scrollTop==0){
                clearInterval(timer);
            }
            document.documentElement.scrollTop=document.body.scrollTop=scrollTop+ispeed;
        },50)
    }
</script>
</body>
<script>
    var url="<?php echo url('getData'); ?>";
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http) {
        $http.get(url).success(function(response) {
            console.log(response);
            $scope.res = response;
        })
    });
</script>
<script>
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</html>