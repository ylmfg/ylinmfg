
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 6px;background:url('__ADMIN__/images/bg1.jpg'); }

        .message{
            width: 520px;
            border-radius: 15px;
            height: 250px;
            background-color: #fff;
            position:absolute;
            left:50%;    /* 定位父级的50% */
            top:40%;
            transform: translate(-50%,-50%); /*自己的50% */
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .head{width: 100%;height: 40px;background: rgb(69, 82, 255);text-align: center;padding-top: 15px;font-size: 14px;}
        .content{height: 120px;width: 100%;}
        .success ,.error{text-align: center;margin-top: 40px; font-size: 18px;
        color:red;
      text-shadow: 1px 1px 1px gray;
    }
        .jump{text-align: center;margin-top: 20px;}
        .wait-time{
            margin-top: 10px;
            text-align: center;
            font-size: 16px;
            color:red;
        }
    </style>

</head>

<body>
<div class="message">

    <div class="head"><span>温馨提示</span></div>

    <div class="content">

        <?php switch ($code) {?>
        <?php case 1:?>
        <p class="success"><?php echo(strip_tags($msg));?></p>
        <?php break;?>
        <?php case 0:?>
        <p class="error"><?php echo(strip_tags($msg));?></p>
        <?php break;?>
        <?php } ?>

        <p class="detail"></p>
        <p class="jump">
            <a id="href" href="<?php echo($url);?>">如果你的浏览器没有自动跳转，请点击这里...</a>
        </p>
        <div class="wait-time">
            <span>等待时间:</span>
            <b id="wait"><?php echo($wait); ?></b>
        </div>

    </div>

</div>

<script type="text/javascript">

    (function(){

        var wait = document.getElementById('wait'),href = document.getElementById('href').href;

        var interval = setInterval(function(){

            var time = --wait.innerHTML;

            if(time<= 0) {

                location.href = href;

                clearInterval(interval);

            };

        }, 1000);

    })();

</script>

</body>

</html>