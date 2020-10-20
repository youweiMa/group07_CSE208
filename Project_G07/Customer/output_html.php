<?php
/*
 * php container function(stores all html outputs) author:Tianhe.Du;
 * html pages author: Xing.Heng;
 * cart function author: Ninghui.Su;
 * MySQL functions author: Youwei.Ma;
 * Reference: PHP and MySQL Web Development, author Welling & Thomson
*/
//display the header
function display_html_header($title){
?>
<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="customer.css" />
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
</html>
<?php } ?>
<?php
//display login page
function display_login_form(){
?>
    <div class="navbar_container">
            <div class="brand">
                <a href="home.html"><img src="cloth/brand.jpg" alt="brand"/></a>
            </div>
    </div>
        <center>
            <div class="background">
            <div class="login_container">
                <section id="content">
                    <form name="Login" method="post" action="member.php">
                            <p class="login">Login</p>
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
                                        <input name="passwd" type="password"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <a class="forgetpwd" href="forget_user.php">Forget your password?</a>
                            <input class="s_button" type="submit" value="Login"/>                            
                        </div>
                    </form>
                </section>
                <p>New users? <a class="jump" href="register.php">Sign Up</a></p>
            </div>
            </div>
       </center>
<?php }?>
<?php
//display register form
function display_register_form(){
?>
    <div class="navbar_container">
        <div class="brand">
            <a href="home.html"><img src="cloth/brand.jpg" alt="brand"/></a>
        </div>
    </div>
    <center>
        <div class="background">   
        <div class="register_container">
            <section id="content">
            <form method="post" action="register_new.php">
                <p class="register">Register</p>
                <div>
                <table class="content" cellpadding="8">
                <tr>
                    <td align="right">Email address:</td>
                    <td><input type="text" name="email" size="30" maxlength="100" placeholder="please input your E-mail address"/></td>
                </tr>
                <tr>
                    <td align="right">User name:</td>
                    <td valign="top"><input type="text" name="username" size="16" maxlength="16" placeholder="6-15 characters"/></td>
                </tr>
                <tr>
                    <td align="right">Password:</td>
                    <td valign="top"><input type="password" name="passwd" size="16" maxlength="16" placeholder="6-15 characters"/></td>
                </tr>
                <tr>
                    <td align="right">Confirm password:</td>
                    <td><input type="password" name="passwd2" size="16" maxlength="16" placeholder="6-15 characters"/></td>
                </tr>
                <tr>
                    <td align="right">Security question:</td>
                    <td><input type="text" name="SQ1" size="30" maxlength="100" placeholder="question for retrieving password"/></td>
                </tr>
                <tr>
                    <td align="right">Answer:</td>
                    <td><input type="text" name="AW1" size="30" maxlength="100" placeholder="please remember your answer"/></td>
                </tr>
                </table>
                </div>
                <div>
                    <input class="s_button" type="submit" value="Register"/>
                </div>
            </form>
            </section>
            <p>Already registered?<a class="jump" href="login.php"> Sign In</a> right now</p>
        </div>
        </div>
    </center>
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
function display_afterplace_page_bottom(){
?>   
    <a href="myorders.php" class="go_to"><input type=button class="back" value="Check orders"></a>
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
        <a href="login.php" class="go_to"><input type=button class="back" value="Login"></a>
    </div>
<?php } ?>
<?php
// display customer pages navigation bar
function display_navbar(){
?>
    <div class="navbar_container">
            <div class="brand">
                <a href="home.php"><img src="cloth/brand.jpg" alt="brand"/></a>
            </div>      
            <div class="navbar">            
                <ul>
                    <li><a href="wash.php">Wash</a></li>                    
                    <li><a href="myorders.php">My Orders</a></li>
                    <li><a href="comments.php">Comments</a></li>                                                    
                </ul>
            </div>
            <div class="user">
                <ul>
                    <li class="dropbtn">
                        <?php echo "".$_SESSION['valid_user'].""?>
                        <div class="drop_menu">
                            <a href="change_pwd_form.php">Change password</a>
                            <a href="logout.php">Log out</a>                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>          
<?php } ?>
<?php
// display wash page
function display_wash(){
?>     
        <div class="map"><a href="home.php">Home page</a>&gt <a href="member.php">Wash</a></div>
        <!--map-->
        <div class="cloth_container">
            <p class="title">Choose Clothes To Wash</p>
        <!--choosing clothing table-->
                <div class="cloth">   
        <table class="cloth_table cloth_items" cellspacing="50">
            <tr>
                <td class="item" data-id="1" data-name="Shirt" data-price="10">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_1">
                                <div class="transbox">
                                    <p>Various kinds of shirts, including leisure and business shirts</p>
                                </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Shirt</td><td>Price: $10</td></tr>
                    </table>
                </td>
                <td class="item" data-id="2" data-name="T-shirt" data-price="5">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_2">
                                    <div class="transbox">
                                        <p>All kinds of T-shirt are accepted</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">T-shirt</td><td>Price: $5</td></tr>
                    </table>
                </td>
                <td class="item" data-id="3" data-name="Jacket" data-price="15">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_3">
                                    <div class="transbox">
                                        <p>All kinds of jackets except suit jacket and down jackets</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Jacket</td><td>Price: $15</td></tr>
                    </table>                    
                </td>
            </tr>
            <tr>
                <td class="item" data-id="4" data-name="Coat" data-price="15">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_4">
                                    <div class="transbox">
                                        <p>All kinds of coats despite the length and material</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Coat</td><td>Price: $15</td></tr>
                    </table>
                </td>
                <td class="item" data-id="5" data-name="Suit" data-price="20">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_5">
                                    <div class="transbox">
                                        <p>Suit jacket and suit pants</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Suit</td><td>Price: $20</td></tr>
                    </table>
                </td>
                <td class="item" data-id="6" data-name="Sweater" data-price="10">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_6">
                                    <div class="transbox">
                                        <p>Various kinds of sweaters, wool and cashmere included</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Sweater</td><td>Price: $10</td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="item" data-id="7" data-name="Jeans" data-price="10">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_7">
                                    <div class="transbox">
                                        <p>Long and short jeans</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Jeans</td><td>Price: $10</td></tr>
                    </table>
                </td>
                <td class="item" data-id="8" data-name="Skirt" data-price="10">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_8">
                                    <div class="transbox">
                                        <p>All kinds despite the length and material are accepted</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Skirt</td><td>Price: $10</td></tr>
                    </table>
                </td>
                <td class="item" data-id="9" data-name="Trousers" data-price="10">
                    <table class="cloth_icon">
                        <tr>
                            <th colspan="2">
                                <div class="cloth_img_9">
                                    <div class="transbox">
                                        <p>Both long and short trousers are accepted</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr><td id="cloth_name">Trousers</td><td>Price: $10</td></tr>
                    </table>
                </td>
            </tr>
        </table>
        </div>
        </div>
        
        <!--shopping cart-->
        <!--this js provides function of hidding the cart when clicking the cart icon-->
        <script type="text/javascript">
        function elementDisplay(object){
        var obj=document.getElementById(object);
	if(obj.style.visibility !=='hidden'){
	obj.style.visibility='hidden';
	}else{
		obj.style.visibility='visible';
            }
        }
        </script>
        <div class="carticon" onclick="elementDisplay('cart_visible')">
            <img src="cloth/cart.png" alt="cart"/>
        </div>
        <div class="cart" id="cart_visible">
            <div class="cart_head">
                <p>Checkout:</p>
            </div>
            <div class="cart_body cart_items">
				<?php
					$cart = isset($_SESSION['cart'])?$_SESSION['cart']:array();
					$sum = 0;
					for($i=0; $i<count($cart); $i++){ 
                                            $sum += $cart[$i]['qty']*$cart[$i]['price'];
				?>
                <div class="cart_cloth item" data-id="<?=$cart[$i]['id']?>" data-price="<?=$cart[$i]['price']?>">
                    <div class="cart_cloth_name"><?=$cart[$i]['name']?></div>
                    <div class="cart_cloth_num"><?=$cart[$i]['qty']?></div>
                    <div class="cart_quantity_icon">
                        <a href="javascript:void(0);" class="sub">-</a><a href="javascript:void(0);" class="add">+</a>
                    </div>
                </div>
                                   <?php } ?>
            </div>     
            <div class="cart_foot">
                <p>Total $: <span class="cart_total"><?=$sum?></span></p>
                <script>
                    function clickHandler(){
                        var total = $('.cart_total').html();
                        var name = '';
                        $(".cart_items>.item").each(function(i,v){
                            name += $(v).find(".cart_cloth_name").text() + " "
                        });
                        window.location.href="order_info.php?price="+total+"&clothName="+name;
                    }
                </script>
                <input class="cart_button" type="button" value="Confirm" onClick="clickHandler()">
            </div>
        </div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/cart.js"></script>                
<?php } ?>
<?php
function order_form($clothName,$price){
?>
    <div class="navbar_container">
        <div class="brand">
            <img src="cloth/brand.jpg" alt="brand"/>
        </div>
    </div>
    <div class="orderinfo_container">
                <div class="oi">
                    <form method="post" action="place_order.php">
                    <p>Clothes: <?php echo $clothName?></p><input type="hidden" name="clothName" value="<?php echo $clothName?>">                    
                    <p>Price: <?php echo $price?></p><input type="hidden" name="price" value="<?php echo $price?>">
                    <p>Area:
                            <select name="area">
                                <option value="Wenxing">Wenxing</option>
                                <option value="Wenhui">Wenhui</option>
                                <option value="Wencui">Wencui</option>
                            </select>
                    </p>
                    <p>Address: <input type="option" name="address"></p>
                    <p>Phone number: <input type="text" name="cusPhone"></p>  
                    <input type="hidden" name="startTime" value="<?php echo $showtime=date("Y-m-d H:i:s");?> ">
                    <input type="hidden" name="status" value="new">
                    <input class="oi_button" type="submit" value="Confirm">
                    </form>
                    <button class="oi_button" onclick="javascript:history.back(-1);">
                        <span>Return</span>
                    </button>                    
                </div>        
    </div>
<?php }?>
<?php
// place order into db
function makeorder($username, $cusPhone, $area,$address,$clothName,$price,$startTime,$status) {

$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			mysql_select_db("db_le",$con);
                        
  $result = mysql_query("insert into tb_order(username, cusPhone, area, address, clothName, price,startTime,status) values
                         ('".$username."','".$cusPhone."','".$area."','".$address."','".$clothName."','".$price."','".$startTime."','".$status."')");
  if (!$result) {
    throw new Exception('Could not make an order - please try again later.');
  }

  return true;
}
?>
<?php
function display_homepage(){
?>
        <div class="map"><a href="home.php">Home page</a></div>
        <!--map-->
        <center>
        <!--html of slides, refer to: http://sc.chinaz.com/jiaoben/huandengpian.html-->
        <section id="rt-showcase-surround">
            <div id="rt-showcase" class="slider-container rt-overlay-dark">
                <div class="rt-container slider-container">
                    <div class="rt-grid-12 rt-alpha rt-omega">               
                        <div class="csslider1 autoplay">
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_0" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_1" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_2" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_3" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_play1" type="radio" class="cs_anchor" checked>
                    <input name="cs_anchor1" autocomplete="off" id="cs_pause1" type="radio" class="cs_anchor" >
                    <ul>
                        <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                            <img src="slide/1.jpg" style="width:530px; height:310px;">
                        </div>
                        <li class="num0 img">
                            <img src="slide/1.jpg"  style="width:530px; height:310px;" />
                        </li>
                        <li class="num1 img">
                            <img src="slide/2.jpg"  style="width:530px; height:310px;" />
                        </li>
                        <li class="num2 img">
                            <img src="slide/3.jpg"  style="width:530px; height:310px;" />
                        </li>
                        <li class="num3 img">
                            <img src="slide/4.jpg"  style="width:530px; height:310px;"/>
                        </li>                    
                    </ul>
                    <div class="cs_description">
                        <label class="num0">
                            <span class="cs_title">
                                <span class="cs_wrapper">Professional Laundry & Easy Delivery</span>
                            </span>                            
                        </label>
                        <label class="num1">
                            <span class="cs_title">
                                <span class="cs_wrapper">Service in Wenxing, Wenhui & Wencui Square</span>
                            </span>                            
                        </label>
                        <label class="num2">
                            <span class="cs_title">
                                <span class="cs_wrapper">Full Service Garment Care</span>
                            </span>                            
                        </label>
                        <label class="num3">
                            <span class="cs_title">
                                <span class="cs_wrapper">Traceable and Steady</span>
                            </span>                            
                        </label>
                    </div>                    
                    <div class="cs_bullets">
                        <label class="num0" for="cs_slide1_0">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num1" for="cs_slide1_1">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num2" for="cs_slide1_2">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num3" for="cs_slide1_3">
                            <span class="cs_point"></span>
                        </label>
                    </div>
                </div>
            </div>
        <div class="clear"></div>
        </div>
        <!--wash button-->
        </div>
            <a href="wash.php">
                <button class="wash_button" style="vertical-align:middle">
                    <span>Wash</span>
                </button>
            </a>    
        </section>
        <!--"how it works" introduction-->
        <div class="intro_container">
            <div class="introduction">
            <h1>How Laundry Expert Works?</h1>
            <h2>move the mouse above icon to see details!</h2>
            <div id="txtbox1">
                <p id="txt1">Make An Order</p>
                <span>
                    Selecting laundry items and check the time, then our deliveryman will be on his way to meet you!
                </span>
            </div>
            <canvas id="arrow1"></canvas>
            <script>
                var c=document.getElementById("arrow1");
                var ctx=c.getContext("2d");
                ctx.beginPath();
                ctx.moveTo(60,0);
                ctx.lineTo(100,40);
                ctx.lineTo(60,80);
                ctx.closePath();
                ctx.fillStyle="#0099ff";
                ctx.fill();
                ctx.fillRect(0,20,60,40);
            </script>
            <div id="txtbox2">
                <p id="txt2">Pick Up</p>
                <span>
                    Deliveryman will come to you and pick up your clothes. Your clothes are ready for traveling.
                </span>
            </div>
            <canvas id="arrow2"></canvas>
            <script>
                var c=document.getElementById("arrow2");
                var ctx=c.getContext("2d");
                ctx.beginPath();
                ctx.moveTo(60,0);
                ctx.lineTo(100,40);
                ctx.lineTo(60,80);
                ctx.closePath();
                ctx.fillStyle="#0099ff";
                ctx.fill();
                ctx.fillRect(0,20,60,40);
            </script>
            <div id="txtbox3">
                <p id="txt3">Clean</p>
                <span>
                    The process of washing, drying, and packing will last within 2 days.
                </span>
            </div>
            <canvas id="arrow3"></canvas>
            <script>
                var c=document.getElementById("arrow3");
                var ctx=c.getContext("2d");
                ctx.beginPath();
                ctx.moveTo(60,0);
                ctx.lineTo(100,40);
                ctx.lineTo(60,80);
                ctx.closePath();
                ctx.fillStyle="#0099ff";
                ctx.fill();
                ctx.fillRect(0,20,60,40);
            </script>
            <div id="txtbox4">
                <p id="txt4">Delivery</p>
                <span>
                    Just waiting when your clothes are on their way back. Confirming after receiving them and paying some bills to deliveryman!
                </span>
            </div>
            </div>
        </div>
        <!--price list-->
        <div class="price_list">
            <div class="price_list_head">
                <h1>What's the price?</h1>
            </div>
            <div class="price_list_left">
                <div class="price_intro">
                    <p>"We provide competitive and affordable price to full laundry services. For a specification of each clothing, please start to wash!"</p>
                </div>            
            </div>
            <div class="price_list_right">
                <div class="price_details">
                    <table>
                        <tr id="price_table_head">
                            <th align="left">Clothing</th>
                            <th align="right">Price/piece</th>
                        </tr>
                        <tr id="alt">
                            <td align="left">Shirt</td>
                            <td align="right">$10</td>
                        </tr>
                        <tr>
                            <td align="left">T-shirt</td>
                            <td align="right">$5</td>
                        </tr>
                        <tr id="alt">
                            <td align="left">Jacket</td>
                            <td align="right">$15</td>
                        </tr>
                        <tr>
                            <td align="left">Coat</td>
                            <td align="right">$15</td>
                        </tr>
                        <tr id="alt">
                            <td align="left">Suit</td>
                            <td align="right">$20</td>
                        </tr>
                        <tr>
                            <td align="left">Sweater</td>
                            <td align="right">$10</td>
                        </tr>
                        <tr id="alt">
                            <td align="left">Jeans</td>
                            <td align="right">$10</td>
                        </tr>
                        <tr>
                            <td align="left">Skirt</td>
                            <td align="right">$10</td>
                        </tr>
                        <tr id="alt">
                            <td align="left">Trousers</td>
                            <td align="right">$10</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </center>
    <!--return to the top-->
    <a href="javascript:scroll(0,0)">
        <img id="timg" src="cloth/timg.jpg" alt="timg"/>
    </a>             
<?php } ?>
<?php
// display my orders
function display_myorder(){
?>    
        <div class="map"><a href="home.php">Home page</a>&gt <a href="myorders.php">My Orders</a></div>
        <!--orders table-->
        <div class="ordertable_container">
            <p class="title">Order Lists</p>
            <div class="ordertable">
		<div class="ordertable_left">
			<p>Current Orders</p>
                        <a class="button" href="myorders_history.php">Past Orders</a>
		</div>
		<div class="ordertable_right">
			<h3>Review and manage your recent orders.</h3>
			<hr/>
                        <table class="order_list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order Date</th>
                                    <th>Items</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>	
                    <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			$valid_user = $_SESSION['valid_user'];
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where username='$valid_user'and status !='finished'");
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
                                        <form method="post" action="finish_order.php">
                                            <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                            <input type="submit" onclick="javascript:return confirm('Are you sure to finish this order?');" value="Confirm">
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
		</div>
            </div>
        </div>
<?php } ?>
<?php
function mark_comment($ordID){
?>
    <div class="navbar_container">
        <div class="brand">
            <img src="cloth/brand.jpg" alt="brand"/>
        </div>
    </div>
    <div class="orderinfo_container">
                <div class="m_c">
                    <form method="post" action="finish_order_confirm.php">
                        <div>
                            <p>Order_id: </p><?php echo $ordID?>
                            <input type="hidden" name="ordID" value="<?php echo $ordID?>">
                            <p>Mark: </p>
                            <input type="radio" name="mark" value="Good">Good
                            <input type="radio" name="mark" value="General">General
                            <input type="radio" name="mark" value="Bad">Bad
                        </div>
                        <div>
                            <p>Comments: </p>
                            <textarea class="c_platform" name="comment" placeholder="please write some comments..."></textarea>
                        </div>
                        <input type="submit" value="Confirm" class="s_button">
                    </form>
                </div>        
    </div>
<?php }?>        
<?php
// display current order details
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
// display my past orders
function display_myorder_history(){
?>
        <div class="map"><a href="home.php">Home page</a>&gt <a href="myorders.php">My Orders</a></div>
        <!--orders table-->
        <div class="ordertable_container">
            <p class="title">Order Lists</p>
            <div class="ordertable">
		<div class="ordertable_left">
                    <p>Past Orders</p>
                    <a class="button" href="myorders.php">Current Orders</a>                    
		</div>
		<div class="ordertable_right">
			<h3>Review and manage your past orders.</h3>
			<hr/>
			<table class="order_list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Finish Date</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Mark</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>	
                    <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			$valid_user = $_SESSION['valid_user'];
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where username='$valid_user'and status='finished' order by endTime desc");
			while($row=mysql_fetch_array($list)){
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row["ordID"] ?></td>
                                    <td><?php echo $row["endTime"] ?></td>
                                    <td><?php echo $row["price"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["mark"] ?></td>
                                    <td>
                                        <form method="post" action="display_p_details.php">
                                        <input type="hidden" name="ordID" value="<?php echo $row['ordID']?>">
                                        <input type="submit" value="Check Details">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
			<?php }?>
                        </table>	
		</div>
            </div>
        </div>
<?php } ?>
<?php
// display past order details
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
function display_comments(){
?>
        <div class="map"><a href="home.php">Home page</a>&gt <a href="wash.php">Comments</a></div>
        <!--show comments below-->
        <div class="comment_container">
            <p class="title">Latest Comments</p>
                    <?php
			$con=mysql_connect("localhost","group07","password");
			if(!$con){
				die("connect fail");
				}
			$valid_user = $_SESSION['valid_user'];
			mysql_select_db("db_le",$con);
			$list=mysql_query("select * from tb_order where status='Finished' order by endTime desc");
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
<?php
function display_changepwd_form(){
?>
        <div class="navbar_container">
            <div class="brand">
                <a href="home.php"><img src="cloth/brand.jpg" alt="brand"/></a>
            </div>
    </div>
        <center>
            <div class="background">
            <div class="login_container">
                <section id="content">
                    <form name="Changepwd" method="post" action="change_pwd.php">
                            <p class="login">Change password</p>
                        <div>
                            <table class="content" cellpadding="8">
                                <tr align=center>
                                    <td>Old password</td>
                                    <td>
                                        <input name="oldpwd" type="text"/>
                                    </td>
                                </tr>
                                <tr align=center>
                                    <td>New password</td>
                                    <td>
                                        <input name="newpwd" type="password"/>
                                    </td>
                                </tr>
                                <tr align=center>
                                    <td>Confirm new password</td>
                                    <td>
                                        <input name="newpwd2" type="password"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <input class="s_button" type="submit" value="Confirm"/>
                        </div>
                    </form>
                </section>
            </div>
            </div>
       </center>
<?php } ?>
<?php
function forget_user(){
?>
      <div class="navbar_container">
            <div class="brand">
                <a href="home.html"><img src="cloth/brand.jpg" alt="brand"/></a>
            </div>
    </div>
        <center>
            <div class="background">
            <div class="login_container">
                <section id="content">
                    <form name="Forgetuser" method="post" action="forget_pwd_checkuser.php">
                            <p class="login">Forget password</p>
                        <div>
                            <table class="content" cellpadding="8">
                                <tr align=center>
                                    <td>User Name</td>
                                    <td>
                                        <input name="user" type="text"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <input class="s_button" type="submit" value="Confirm"/>                            
                        </div>
                    </form>
                </section>
            </div>
            </div>
       </center>
<?php } ?>
<?php
function display_forgetpwd_form(){
?>
        <div class="navbar_container">
            <div class="brand">
                <a href="home.html"><img src="cloth/brand.jpg" alt="brand"/></a>
            </div>
    </div>
        <center>
            <div class="background">
            <div class="login_container">
                <section id="content">
                    <p class="login">Security question</p>
                    <form name="Forgetpwd" method="post" action="forget_pwd.php">
                        <table class="content" cellpadding="8">
                        <tr align="center">
                            <td>Question: </td>
                            <td>
                                <?php 
                                $con=mysql_connect("localhost","group07","password");
                                if(!$con){
                                    die("connect fail");
                                            }
                                mysql_select_db("db_le",$con);
                                $result = mysql_query("select SQ1 from user where username = '".$_SESSION['user_f']."'");
                                $question = mysql_fetch_array($result);
                                echo $question['SQ1'];
                                ?>
                            </td>
                        </tr>                                                                           
                        <tr align="center">
                            <td>Answer</td>
                            <td><input name="answer" type="text"/></td>
                        </tr>
                        </table>
                        <div>
                            <input class="s_button" type="submit" value="Confirm"/>
                        </div>
                    </form>
                </section>
            </div>
            </div>
       </center>
<?php } ?>









        