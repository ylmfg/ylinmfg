<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\phpStudy\WWW\ylinmfg\public/../application/admin\view\product\lists.html";i:1516004984;s:73:"D:\phpStudy\WWW\ylinmfg\public/../application/admin\view\comm\header.html";i:1516005364;s:71:"D:\phpStudy\WWW\ylinmfg\public/../application/admin\view\comm\left.html";i:1516004469;s:73:"D:\phpStudy\WWW\ylinmfg\public/../application/admin\view\comm\footer.html";i:1516008061;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>意灵工坊-后台管理</title>
    <link rel="stylesheet" href="__LAY__/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <!--头部-->
    <div class="layui-header">
    <div class="layui-logo">意灵工坊-后台管理</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
        <li class="layui-nav-item"><a href="/">首页</a></li>
        <li class="layui-nav-item">
            <a href="javascript:;">其它系统</a>
            <dl class="layui-nav-child">
                <dd><a href="">邮件管理</a></dd>
                <dd><a href="">消息管理</a></dd>
                <dd><a href="">授权管理</a></dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
        <li class="layui-nav-item">
            <a href="javascript:;">
                <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
            </a>
            <dl class="layui-nav-child">
                <dd><a href="">基本资料</a></dd>
                <dd><a href="">安全设置</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="<?php echo url('admin/index/login_out'); ?>">退出</a></li>
    </ul>
</div>
    <!--头部-->

    <!--左侧-->
    <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="test">
            <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;"><?php echo $vo['name']; ?></a>
                <?php if($vo['hasSub'] == 1): if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <dl class="layui-nav-child">
                    <dd class="<?php echo $v['class']; ?>"><a href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></dd>
                </dl>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
    <!--左侧-->

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">产品列表</div>
    </div>
    <!--底部-->
    <div class="layui-footer">
    <!-- 底部固定区域 -->
    ©ylingf.com-意灵工坊
</div>
    <!--底部-->

</div>
<script src="__LAY__/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>