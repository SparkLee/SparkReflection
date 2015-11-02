<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>类（<?php echo $class_info['name']['value'] ?>）的信息（使用PHP反射类ReflectionClass获取）</title>

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
    .bs-docs-header {
      margin-bottom: 5px;
      font-size: 20px;
      position: relative;
      padding: 30px 0;
      color: #cdbfe3;
      text-align: center;
      text-shadow: 0 1px 0 rgba(0,0,0,.1);
      background-color: #6f5499;
      background-image: -webkit-gradient(linear,left top,left bottom,from(#563d7c),to(#6f5499));
      background-image: -webkit-linear-gradient(top,#563d7c 0,#6f5499 100%);
      background-image: -o-linear-gradient(top,#563d7c 0,#6f5499 100%);
      background-image: linear-gradient(to bottom,#563d7c 0,#6f5499 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#563d7c', endColorstr='#6F5499', GradientType=0);
      background-repeat: repeat-x;
    }

    .bs-docs-header h1 {
      margin-top: 0;
      color: #fff;
    }
    .bs-docs-header p {
      margin-bottom: 0;
      font-weight: 300;
      line-height: 1.4;
    }
    .bs-docs-header .container {
      position: relative;
    }

    #accordion {
      margin: 5px;
    }
    </style>

  </head>
  <body>
    <div class="bs-docs-header" id="content" tabindex="-1">
      <div class="container">
        <h1>类（<?php echo $class_info['name']['value'] ?>）的信息</h1>
        <p>使用PHP反射类ReflectionClass获取</p>
      </div>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php foreach ($class_info as $k => $v) { ?>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading-<?php echo $k?>">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $k?>" aria-expanded="false" aria-controls="collapseOne">
                <span><?php echo $v['key'] ?></span><span style='color:green;'>（<?php echo $v['value_str'] ?>）</span>
              </a>
            </h4>
          </div>
          <div id="collapse-<?php echo $k?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $k?>">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1"><?php echo $v['key'] ?>：</div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-11"><?php var_dump($v['value']) ?></div>
              </div>
              <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">描述：</div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-11"><?php echo $v['tip'] ?></div>
              </div>
              <div class="row" style='margin-top: 10px;'>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">调用方法：</div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-11"><?php echo $v['call_method'] ?></div>
              </div>       
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <footer style='margin-bottom: 30px;'></footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="assets/jquery-2.1.4.min.js"></script> -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>