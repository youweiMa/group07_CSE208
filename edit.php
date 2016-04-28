<?php
	@session_start();
	include "php/config.php";
?>
<?php
	if(!$_SESSION['user']){
		echo "<script language=javascript>location.href='login.php';</script>";
		exit;
	}
?>

<?php
	$id = $_GET['id'];
	if($id >= 0){
		$conn = mysql_connect($mysql_servername , $mysql_username , $mysql_password);
		mysql_select_db($mysql_database);
		mysql_query("SET NAMES UTF8");
		$sql = "SELECT * FROM `order` where id=" . $id;
		$res = mysql_query($sql);
		if($res && $row = mysql_fetch_array($res))
		{
			$area = $row['area'];
			$acceptedTime = $row['acceptedTime'];
			$status = $row['status'];
			$price = $row['price'];
		}
		mysql_close($conn);
	}
	else{
		$id ="";
		$area = "";
		$acceptedTime = "";
		$status = "";
		$price = "";
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Add an Order</title>
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
						<li><?=$_SESSION['user']?></li>
						<li class="divide"></li>
						<li><a href="php/logout.php">Exit</a></li>
				</ul>
				<ul class="navbar">
					<li class="nav active"><a href="index.php">Order List</a></li>
				</ul>
			</div>
		</div>
	</div>

	<form class="container main content" action="php/edit.php" method="post">
		<input name="id" type="hidden" value="<?=$id?>" />
		<table class="container info">
			<tr>
				<td class="label">Area</td>
				<td>
					<select name="area">
						<option value="Square A" <?= $area=='Square A'?"selected":"" ?>>Square A</option>
						<option value="Square B" <?= $area=='Square B'?"selected":"" ?>>Square B</option>
						<option value="Square C" <?= $area=='Square C'?"selected":"" ?>>Square C</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label">Accepted Time</td>
				<td><input name="acceptedTime" type="text" value="<?=$acceptedTime?>" required="true" /></td>
			</tr>
			<tr>
				<td class="label">Status</td>
				<td>
					<select name="status">
						<option <?= $status=='New'?"selected":"" ?> value="New">New</option>
						<option <?= $status=='Accepted'?"selected":"" ?> value="Accepted">Accepted</option>
						<option <?= $status=='Shipping'?"selected":"" ?> value="Shipping">Shipping</option>
						<option <?= $status=='Finished'?"selected":"" ?> value="Finished">Finished</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label">Price</td>
				<td><input name="price" type="text" value="<?=$price?>" required="true" /></td>
			</tr>
			<tr>
				<td class="colspan tc" colspan="2"><input type="submit" value="Go" class="submit"/></td>
			</tr>
		</table>
	</form>

	<div class="container main foot">
		<p>Copyright | 2016</p>
	</div>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			var id = getQueryStringByName("id");
			if(id) {
				document.title = "Edit Order " + id;
			}

			function getQueryStringByName(name){
				var result = location.search.match(new RegExp("[\?\&]" + name+ "=([^\&]+)","i"));
				if(result == null || result.length < 1){
					return "";
				}
				return result[1];
			}
		});
	</script>
</body>
</html>
