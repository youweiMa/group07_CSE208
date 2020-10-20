<?php
//Author:Ninghui.Su
	header("Content-type:text/json");
	session_start();

	$type = isset($_POST['type'])?$_POST['type']:0;
	if($type == 0)
		exit;
	else{

		function exist($cart, $id){
			for($i=0; $i<count($cart); $i++){
				if($cart[$i]['id'] == $id)
					return true;
			}
			return false;
		}

		$id = $_POST['id'];
		$cart = isset($_SESSION['cart'])?$_SESSION['cart']:array();

		// add a new item to cart
		if($type == 1){
			$name = $_POST['name'];
			$price = $_POST['price'];
			if(exist($cart, $id)){
				echo json_encode(array("code"=>300, "msg"=>"The cloth is already in your cart!"));
				exit;
			}
			else{
				array_push($cart, array("id"=>$id, "name"=>$name, "price"=>$price, "qty"=>1));
				$_SESSION['cart'] = $cart;
				echo json_encode(array("code"=>200, "msg"=>"Success!"));
				exit;
			}
		}
		// reduce quantity of an item in cart
		else if($type == 2){
			if(!exist($cart, $id)){
				echo json_encode(array("code"=>300, "msg"=>"Item not exist!"));
				exit;
			}
			else{
				for($i=0; $i<count($cart); $i++){
					if($cart[$i]['id'] == $id){
						$cart[$i]['qty'] = $cart[$i]['qty']-1;
						if($cart[$i]['qty'] <= 0){
							$new_cart = array();
							for($j=0; $j<count($cart); $j++)
								if($cart[$j]['id'] != $id)
									array_push($new_cart, $cart[$j]);

							$_SESSION['cart'] = $new_cart;
							echo json_encode(array("code"=>201, "msg"=>"Item removed!"));
							exit;
						}
						else {
							$_SESSION['cart'] = $cart;
							echo json_encode(array("code"=>200, "msg"=>"Success!"));
							exit;
						}
					}
				}
			}
		}
		// increase quantity of an item in cart
		else if($type == 3){
			if(!exist($cart, $id)){
				echo("{'code':300, 'msg':'Item not exist!'}");
				exit;
			}
			else{
				for($i=0; $i<count($cart); $i++){
					if($cart[$i]['id'] == $id){
						$cart[$i]['qty'] = $cart[$i]['qty']+1;
						$_SESSION['cart'] = $cart;
						echo json_encode(array("code"=>200, "msg"=>"Success!"));
						exit;
					}
				}
			}
		}
	}
?>