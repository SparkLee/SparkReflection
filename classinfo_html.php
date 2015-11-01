<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>类（<?php echo $class_info['name'] ?>）的信息（使用PHP反射类ReflectionClass获取）</title>

    <!-- Bootstrap -->
    <!-- <link href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .row {
        border: 1px solid green;
      }
      .row .left {
        border-right: 1px solid green;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="left col-md-5">
          <p class='key'>类名<p>
          <p class='tip'>两种方法获取：访问公共成员属性name；调用成员方法getName</p>
        </div>
        <div class="col-md-7">
          <p class='value'><?php echo $class_info['name'] ?></p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="assets/jquery-2.1.4.min.js"></script> -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>