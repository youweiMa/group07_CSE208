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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orders List</title>
    <link rel="stylesheet" type="text/css" href="css/global.css" />
</head>
<body>
    <form id="form1" runat="server">
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

        <div class="container main content">
            <table class="container title title5 header">
				<tr>
					<td>ID</td>
					<td>Area</td>
					<td>Accepted Time</td>
					<td>Status</td>
					<td>Price</td>
					<td><input type="button" class="operater add" value="Add"></td>
					<td></td>
				</tr>
			</table>
			<div class="line"></div>
			<div id="FlightsList" class="FlightsList title5 rows">
				<table>
					<?php
						$conn = mysql_connect($mysql_servername , $mysql_username , $mysql_password);
						mysql_select_db($mysql_database);
						mysql_query("SET NAMES UTF8");
						$sql = "SELECT * FROM `order`";
						$res = mysql_query($sql);
						while($row = mysql_fetch_array($res))
						{
							echo '<tr data-id="' . $row['id'] . '">';
							echo '	<td>' . $row['id'] . '</td>';
							echo '	<td>' . $row['area'] . '</td>';
							echo '	<td>' . $row['acceptedTime'] . '</td>';
							echo '	<td>' . $row['status'] . '</td>';
							echo '	<td>' . $row['price'] . '</td>';
							echo '	<td><input type="button" class="update" value="Update" /></td>';
							echo '	<td><input type="button" class="delete" value="Delete" /></td>';
							echo '</tr>';
							echo '<tr><td class="colspan" colspan="7"><div></div></td></tr>';
						}
						mysql_close($conn);
					?>
				</table>
			</div>
        </div>

        <div class="container main foot">
            <p>Copyright | 2016</p>
        </div>
    </form>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			var editLink = "edit.php";
			var deleteLink = "php/delete.php";
			$(".delete").click(function(e){
				var $this = $(this);
				if(confirm("Sure to delete?")){
					var $tr = $this.parents("tr:first");
					var id = $tr.data("id");
					$.ajax({
						type: "POST",
						url: deleteLink,
						data: { id: id },
						dataType: "json",
						complete: function (data) {
							var $tr = $this.parents("tr:first");
							var $tr_line = $tr.next();
							$tr.fadeOut(function () {
								$tr.remove();
							});
							$tr_line.fadeOut(function () {
								$tr_line.remove();
							});
						}
					});
				}
			});
			$(".add").click(function(e){
				location.href = editLink;
			});
			$(".update").click(function(e){
				location.href = editLink + "?id=" + $(this).parents("tr:first").data("id");
			});
		});
	</script>
</body>
</html>
