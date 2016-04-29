<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include_once dirname(dirname(__FILE__)).'/variable.php';?>
<html>
<head>
<title>登录</title>
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="container">
	<div class="headercon">
		<div class="wrapper">
			<div class="header">
				<div class="logo">
					<a href="index.php">
						<h1>WANGMIN</h1>
					</a>
				</div>
				<div class="menu">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php">HOME</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bannercon">
		<div class="wrapper">
			<div class="banner">
				<h1>Min's Home</h1>
				<h2>
					<a href="">Home</a>
					 > 
					<a href="">My blog</a>
				</h2>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			<div class="boxlt-wide form-style">
				<h1>一个关于WM的小网站</h1>
				<div class="abstract">
				    <script>alert("a");</script>
					<form method="post" action=<?php echo '/controller/loginC.php';?>>
					<label class="form-label"><span>用户名：</span><input type="text" name="name"><br></label>
					<label class="form-label"><span>密码：</span><input type="text" name="password"><br></label>
					<input class="button" type="submit" value="登录">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	</div>
</div>
</body>
</html>
