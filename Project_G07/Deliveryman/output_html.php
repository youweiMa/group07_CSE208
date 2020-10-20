<?php
//Author:Ninghui.Su,Youwei.Ma,Tianhe.Du
//display the header
function display_html_header($title){
?>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="deliveryman.css" />
    </head>
    <body>
<?php }?>
<?php
//display the footer
function display_html_footer(){    
?>
    </body>
    <footer>
        <hr>
        <address>
            Posted by: Group 07
            <br>
            Authors: Ninghui.Su, Tianhe.Du, Xing.Heng, Youwei.Ma
        </address>
    </footer>       
<?php } ?>
<?php
function display_login_form(){
?>
    <div class="navbar_container">
            <div class="brand">
                <img src="cloth/brand.jpg" alt="brand"/>
            </div>            
        </div>
        <div class="map">
            <a href="d_home.php">Delivery Home</a>
	</div>
        <div class="login_container">
                <section id="content">
                    <form name="Login" method="post" action="member.php">
                            <p class="login">Delivery Login</p>
                        <div>
                            <table class="content" cellpadding="8">
                                <tr align=center>
                                    <td>User Name</td>
                                    <td>
                                        <input name="username" type="text"/>
                                    </td>
                                </tr>
                                <tr align=center>
                                    <td>Password</td>
                                    <td>
                                        <input name="password" type="password"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                            <div>
                                <input class="s_button" type="submit" value="Login"/>
                            </div>
                    </form>
                </section>
            </div>
<?php } ?>
<?php
//show messages if invalid input in registration
function display_problem_page_top(){
?>
    <div class="navbar_container">
        <div class="brand">
            <img src="cloth/brand.jpg" alt="brand"/>
        </div>
    </div>
    <div class="problem_container">
<?php } ?>
<?php
function display_problem_page_bottom(){
?>   
    <button class="back" onclick="javascript:history.back(-1);">
        <span>&lt&lt</span>
    </button>
    </div>
<?php } ?>   
<?php
// show messages if successfully register
function display_success_page_top(){
?>
    <div class="navbar_container">
        <div class="brand">
            <img src="cloth/brand.jpg" alt="brand"/>
        </div>
    </div>
    <div class="problem_container">
<?php } ?>
<?php
function display_success_page_bottom(){
?>   
        <a href="d_home.php" class="go_to"><input type=button class="back" value="Login"></a>
    </div>
<?php } ?>
<?php
// display pages navigation bar
function display_navbar(){
?>
    <div class="navbar_container">
            <div class="brand">
                <img src="cloth/brand.jpg" alt="brand"/>
            </div>      
            <div class="navbar">            
                <ul>
                    <li><a href="delivery_wenxing_pickup.php">PICK UP &amp DELIVERY</a></li>
                                                   
                </ul>
            </div>
            <div class="user">
                <ul>
                    <li class="dropbtn">
                        <?php echo "".$_SESSION['valid_del'].""?>
                        <div class="drop_menu">
                            <a href="logout.php">Log out</a>                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>          
<?php } ?>
<?php
function display_wxp(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="delivery_wenxing_pickup.php">Wenxing </a>            
                <a class="afree" href="delivery_wenhui_pickup.php">Wenhui </a>
                <a class="afree" href="delivery_wencui_pickup.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="delivery_wenxing_pickup.php">Picking Up</a></li>
                            <li><a class="status" href="delivery_wenxing_delivery.php">In Delivery</a></li>

			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenxing' and status='picking up'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>
<?php
function display_wxd(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="delivery_wenxing_delivery.php">Wenxing </a>            
                <a class="afree" href="delivery_wenhui_delivery.php">Wenhui </a>
                <a class="afree" href="delivery_wencui_delivery.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="delivery_wenxing_pickup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="delivery_wenxing_delivery.php">In Delivery</a></li>

			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenxing' and status='in delivery'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>

<?php
function display_whp(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="delivery_wenxing_pickup.php">Wenxing </a>            
                <a class="aselect" href="delivery_wenhui_pickup.php">Wenhui </a>
                <a class="afree" href="delivery_wencui_pickup.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="delivery_wenhui_pickup.php">Picking Up</a></li>
                            <li><a class="status" href="delivery_wenhui_delivery.php">In Delivery</a></li>

			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenhui' and status='picking up'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>
<?php
function display_whd(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="delivery_wenxing_delivery.php">Wenxing </a>            
                <a class="aselect" href="delivery_wenhui_delivery.php">Wenhui </a>
                <a class="afree" href="delivery_wencui_delivery.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="delivery_wenhui_pickup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="delivery_wenhui_delivery.php">In Delivery</a></li>
			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenhui' and status='in delivery'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>

<?php
function display_wcp(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="delivery_wenxing_pickup.php">Wenxing </a>            
                <a class="afree" href="delivery_wenhui_pickup.php">Wenhui </a>
                <a class="aselect" href="delivery_wencui_pickup.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="delivery_wencui_pickup.php">Picking Up</a></li>
                            <li><a class="status" href="delivery_wencui_delivery.php">In Delivery</a></li>

			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wencui' and status='picking up'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>
<?php
function display_wcd(){
?>
    <div class="map">
            <a href="delivery_wenxing_pickup.php">Order Management</a>
	</div>		
	<div class="dm_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="delivery_wenxing_delivery.php">Wenxing </a>            
                <a class="afree" href="delivery_wenhui_delivery.php">Wenhui </a>
                <a class="aselect" href="delivery_wencui_delivery.php">Wencui</a>
            </div>
            <div class="dm_order_bigtable">
                <table>
		<tr>
                    <td class="dm_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="delivery_wencui_pickup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="delivery_wencui_delivery.php">In Delivery</a></li>

			</ul>
                    </td>
                    <td class="dm_order_bigtable_righttd">			
			<table class="dm_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Phone</td>
                                    <td>Address</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wencui' and status='in delivery'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["cusPhone"]?></td>
                                    <td><?php echo $row["address"] ?></td>
				</tr>
                            </tbody>
                    <?php }?>
			</table>
                    </td>
		</tr>
                </table>
            </div>
        </div>
<?php } ?>
