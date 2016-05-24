<?php
//Author:Xing.Heng,Tianhe.Du,Youwei.Ma
//display the header
function display_html_header($title){
?>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="manager.css" />
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
            <a href="m_home.php">Management Home</a>
	</div>
        <div class="login_container">
                <section id="content">
                    <form name="Login" method="post" action="member.php">
                            <p class="login">Administration Login</p>
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
        <a href="m_home.php" class="go_to"><input type=button class="back" value="Login"></a>
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
                    <li><a href="manager_order_wenxing_new.php">Order Management</a></li>
                    <li><a href="m_comments.php">Comments</a></li>                                                    
                </ul>
            </div>
            <div class="user">
                <ul>
                    <li class="dropbtn">
                        <?php echo "".$_SESSION['valid_man'].""?>
                        <div class="drop_menu">
                            <a href="logout.php">Log out</a>                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>          
<?php } ?>
<?php
// display order details
function display_c_order($ordID,$startTime,$username,$cusPhone,$area,$address,$clothName,$price,$status){
?>
        <div class="od_heading">
            <p>Check details:</p>
        </div>
        <div class="order_details_container">
            <table class="order_details" cellpadding="15" border="1">
                <thead>
                    <tr>
                        <td>Order_id: <?php echo $ordID?></td>
                        <td>Place at: <?php echo $startTime?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>User: <?php echo $username?></td>
                        <td>Phone: <?php echo $cusPhone?></td>
                    </tr>
                    <tr>
                        <td>Area: <?php echo $area?></td>
                        <td>Address: <?php echo $address?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Cloth: <?php echo $clothName?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Total price: $<?php echo $price?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Status: <?php echo $status?></td>
                    </tr>
                </tbody>
            </table>
        </div>  
<?php }?>
<?php
// display finished order details
function display_p_order($ordID,$startTime,$endTime,$username,$cusPhone,$area,$address,$clothName,$price,$status,$mark,$comment){
?>
        <div class="od_heading">
            <p>Check details:</p>
        </div>
        <div class="order_details_container">
            <table class="order_details" cellpadding="15" border="1">
                <thead>
                    <tr>
                        <td colspan="2">Order_id: <?php echo $ordID?></td>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Place at: <?php echo $startTime?></td>
                        <td>Finish at: <?php echo $endTime?></td>
                    </tr>
                    <tr>
                        <td>User: <?php echo $username?></td>
                        <td>Phone: <?php echo $cusPhone?></td>
                    </tr>
                    <tr>
                        <td>Area: <?php echo $area?></td>
                        <td>Address: <?php echo $address?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Cloth: <?php echo $clothName?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Total price: $<?php echo $price?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Status: <?php echo $status?></td>
                    </tr>
                    <tr>
                        <td>Mark: <?php echo $mark?></td>
                        <td>Comments: <?php echo $comment?></td>
                    </tr>
                </tbody>
            </table>
        </div>  
<?php }?>  
<?php
function display_wxn(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="manager_order_wenxing_new.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_new.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_new.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="manager_order_wenxing_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenxing_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenxing_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenxing_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenxing_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenxing' and status='new'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_p.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wxp(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="manager_order_wenxing_pickingup.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_pickingup.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_pickingup.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenxing_new.php">New</a></li>
                            <li><a class="status_selected" href="manager_order_wenxing_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenxing_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenxing_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenxing_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_w.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wxw(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="manager_order_wenxing_washing.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_washing.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_washing.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenxing_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenxing_pickingup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="manager_order_wenxing_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenxing_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenxing_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenxing' and status='washing'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_d.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wxi(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="manager_order_wenxing_indelivery.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_indelivery.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_indelivery.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenxing_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenxing_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenxing_washing.php">Washing</a></li>
                            <li><a class="status_selected" href="manager_order_wenxing_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenxing_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wxf(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="aselect" href="manager_order_wenxing_finished.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_finished.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_finished.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenxing_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenxing_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenxing_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenxing_indelivery.php">In Delivery</a></li>
                            <li><a class="status_selected" href="manager_order_wenxing_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenxing' and status='finished'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="display_finished_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_whn(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_new.php">Wenxing </a>            
                <a class="aselect" href="manager_order_wenhui_new.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_new.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="manager_order_wenhui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenhui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenhui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenhui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenhui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenhui' and status='new'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_p.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_pickingup.php">Wenxing </a>            
                <a class="aselect" href="manager_order_wenhui_pickingup.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_pickingup.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenhui_new.php">New</a></li>
                            <li><a class="status_selected" href="manager_order_wenhui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenhui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenhui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenhui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_w.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_whw(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_washing.php">Wenxing </a>            
                <a class="aselect" href="manager_order_wenhui_washing.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_washing.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenhui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenhui_pickingup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="manager_order_wenhui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenhui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenhui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenhui' and status='washing'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_d.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_whi(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_indelivery.php">Wenxing </a>            
                <a class="aselect" href="manager_order_wenhui_indelivery.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_indelivery.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenhui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenhui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenhui_washing.php">Washing</a></li>
                            <li><a class="status_selected" href="manager_order_wenhui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wenhui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_whf(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_finished.php">Wenxing </a>            
                <a class="aselect" href="manager_order_wenhui_finished.php">Wenhui </a>
                <a class="afree" href="manager_order_wencui_finished.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wenhui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wenhui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wenhui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wenhui_indelivery.php">In Delivery</a></li>
                            <li><a class="status_selected" href="manager_order_wenhui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wenhui' and status='finished'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="display_finished_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wcn(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_new.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_new.php">Wenhui </a>
                <a class="aselect" href="manager_order_wencui_new.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status_selected" href="manager_order_wencui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wencui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wencui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wencui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wencui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wencui' and status='new'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_p.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_pickingup.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_pickingup.php">Wenhui </a>
                <a class="aselect" href="manager_order_wencui_pickingup.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wencui_new.php">New</a></li>
                            <li><a class="status_selected" href="manager_order_wencui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wencui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wencui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wencui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_w.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wcw(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_washing.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_washing.php">Wenhui </a>
                <a class="aselect" href="manager_order_wencui_washing.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wencui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wencui_pickingup.php">Picking Up</a></li>
                            <li><a class="status_selected" href="manager_order_wencui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wencui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wencui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wencui' and status='washing'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="status_to_d.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit"  value="Update Status">
                                        </form>
                                        
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wci(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_indelivery.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_indelivery.php">Wenhui </a>
                <a class="aselect" href="manager_order_wencui_indelivery.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wencui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wencui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wencui_washing.php">Washing</a></li>
                            <li><a class="status_selected" href="manager_order_wencui_indelivery.php">In Delivery</a></li>
                            <li><a class="status" href="manager_order_wencui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
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
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="display_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_wcf(){
?>
    <div class="map">
            <a href="manager_order_wenxing_new.php">Order Management</a>
	</div>		
	<div class="manager_order_bigcontainer">
            <div class="areas">
                <a class="afree" href="manager_order_wenxing_finished.php">Wenxing </a>            
                <a class="afree" href="manager_order_wenhui_finished.php">Wenhui </a>
                <a class="aselect" href="manager_order_wencui_finished.php">Wencui</a>
            </div>
            <div class="manager_order_bigtable">
                <table>
		<tr>
                    <td class="manager_order_bigtable_lefttd">
			<h2>Orders</h2>
			<ul>
                            <li><a class="status" href="manager_order_wencui_new.php">New</a></li>
                            <li><a class="status" href="manager_order_wencui_pickingup.php">Picking Up</a></li>
                            <li><a class="status" href="manager_order_wencui_washing.php">Washing</a></li>
                            <li><a class="status" href="manager_order_wencui_indelivery.php">In Delivery</a></li>
                            <li><a class="status_selected" href="manager_order_wencui_finished.php">Finished</a></li>
			</ul>
                    </td>
                    <td class="manager_order_bigtable_righttd">			
			<table class="manager_order_smalltable">
                            <thead>
				<tr>
                                    <td>Order ID</td>
                                    <td>Order Date</td>
                                    <td>Items</td>
                                    <td>Cost</td>
                                    <td>Order Status</td>
                                    <td>Operation</td>
				</tr>
                            </thead>
                            <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where area='Wencui' and status='finished'");
			while($row=mysql_fetch_array($list)){
                            ?>		
                            <tbody>
				<tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["startTime"] ?></td>
                                    <td><?php echo $row["clothName"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td>
                                        <form method="post" action="display_finished_detail.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
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
function display_comments(){
?>
        <div class="map"><a href="m_comments.php">Comments</a></div>
        <!--show comments below-->
        <div class="comment_container">
                    <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			$valid_man = $_SESSION['valid_man'];
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where status='finished'");
			while($row=mysql_fetch_array($list)){
                    ?>          
                    <div class="comment_column_box">
                        <div class="name_time_score_container">
                            <span class="comment_username"><?php echo $row["username"] ?></span>
                            <span class="comment_time"><?php echo $row["endTime"] ?></span>
                            <span class="comment_score"><?php echo $row["mark"] ?></span>
                        </div>
                        <div class="comment_content">
                            <p>
                                <?php echo $row["comment"] ?>
                            </p>	
                        </div>
                    </div>
			<?php }?>
        </div>
<?php } ?>