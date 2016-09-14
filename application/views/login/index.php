<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $this->config->item('system_name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<link rel="stylesheet" href="<?php echo base_url('static/dist/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('static/css/signin.css'); ?>">
	</head>
	<body>
		<div class="container">
	    <form class="form-signin" role="form" method="post" action="/user/login">
	        <h3 class="form-signin-heading text-center"><font color="#155799"><?php echo $this->config->item('system_name'); ?></font></h3>
	        <input type="email" class="form-control" placeholder="用户名" style="margin-top: 16px;" name="username" required autofocus>
	        <input type="password" class="form-control margin-top-10" style="margin-top: 16px;" name="password" placeholder="密码" required>
	        <div class="checkbox">
	            <label class="rember-color">
	                <input type="checkbox" value="remember-me">记住我
	            </label>
	        </div>
	        <button class="btn btn-lg btn-success btn-block btn-color1" type="submit">登 录</button>

	    </form>

	</div> <!-- /container -->
	</body>
</html>