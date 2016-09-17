<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->config->item('system_name');?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('static/dist/css/bootstrap.min.css'); ?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('static/css/dashboard'); ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url('static/js/'); ?>ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('static/js/'); ?>/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $this->config->item('system_name');?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">控制台</a></li>
            <li><a href="#">设置</a></li>
            <li><a href="#">我的</a></li>
            <li><a href="<?php echo base_url('user/quit');?>">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li <?php if($controller_method == 'index_index') { echo "class='active'"; }?>><a href="<?php echo base_url('index/index')?>">数据概览</a></li>
          </ul>

          <ul class="nav nav-sidebar"><span class="menu_header">用户管理</span>
            <li <?php if($controller_method == 'user_adminIndex') { echo "class='active'"; }?>><a href="<?php echo base_url('user/adminIndex')?>">用户管理</a></li>
            <li><a href="#">角色管理</a></li>
            <li><a href="#">权限管理</a></li>
          </ul>
          <ul class="nav nav-sidebar"><span  class="menu_header">组织结构管理</span>
            <li><a href="">组织结构管理</a></li>
          </ul>

          <ul class="nav nav-sidebar"><span  class="menu_header">员工管理</span>
            <li><a href="">员工管理</a></li>
            <li><a href="">新增员工</a></li>
          </ul>
          <ul class="nav nav-sidebar"><span  class="menu_header">数据管理</span>
            <li><a href="">数据录入</a></li>
            <li><a href="">数据查询</a></li>
            <li><a href="">数据清理</a></li>
          </ul>
        </div>