<?php
	@session_start();
	include "php/config.php";
?>
<?php
	if($_SESSION['user']){
		echo "<script language=javascript>location.href='index.php';</script>";
		exit;
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/global.css" />
</head>
<body>
	<div class="container" id="top">
		<div class="head main">
			<div class="logo fl">
				<img src="image/logo.png" />
			</div>
			<div class="menu fr">
				<ul class="userinfo">
					<li><a href="login.php">Login</a></li>
				</ul>
				<ul class="navbar">
					<li class="nav"><a href="index.php">Order List</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container main content">
		<form class="loginArea" action="php/login.php" method="post">
			<table class="fl" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="colspan" colspan="2"><h1>Login</h1></td>
				</tr>
				<tr>
					<td class="label">Account:</td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td class="label">Password:</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td class="colspan" colspan="2"><input type="submit" value="Go" class="submit"/></td>
				</tr>
			</table>
			<img class="fr" src="image/cover.jpg" />
		</form>
	</div>

	<div class="container main foot">
		<p>Copyright | 2016</p>
	</div>
</body>
</html>
