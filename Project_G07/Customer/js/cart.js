//Author:Ninghui.Su
$(document).ready(function(){
	// template for a new item
	var template = '<div class="cart_cloth item">'+
                '    <div class="cart_cloth_name"></div>'+
                '    <div class="cart_cloth_num">1</div>'+
                '    <div class="cart_quantity_icon">'+
				'		<a href="javascript:void(0);" class="sub">-</a><a href="javascript:void(0);" class="add">+</a>'+
				'	</div>'+
                '</div>';

	// bind click event of each cloth, will be added to shopping cart
	$(".cloth_items").on("click", ".item", function(){
		var cloth = {
			type: 1,	// add to cart
			id: $(this).data("id"),
			name: $(this).data("name"),
			price: $(this).data("price")
		};
		$.ajax({
			type: "POST",
			url: "php/cart.php",
			data: cloth,
			dataType: "json",
			success: function (data) {
				if(data.code == 200){
					var $new = $(template);
					$(".cart_items").append($new);
					$new.data("id", cloth.id);
					$new.data("price", cloth.price);
					$new.find(".cart_cloth_name").text(cloth.name);
					updateTotal();
				}
				else if(data.code == 300){
					alert(data.msg);
				}
			}
		});
	});

	// bind click event of decrease a shopping cart item
	$(".cart_items").on("click", "a.sub", function(){
		var $item = $(this).parents(".item:first");
		var cloth = {
			type: 2,	// subtract
			id: $item.data("id")
		};
		$.ajax({
			type: "POST",
			url: "php/cart.php",
			data: cloth,
			dataType: "json",
			success: function (data) {
				if(data.code == 200){
					$item.find(".cart_cloth_num").text(parseInt($item.find(".cart_cloth_num").text())-1);
					updateTotal();
				}
				else if(data.code == 201){
					$item.fadeOut(function () {
						$item.remove();
						updateTotal();
					});
				}
			}
		});
	});

	// bind click event of increase a shopping cart item
	$(".cart_items").on("click", "a.add", function(){
		var $item = $(this).parents(".item:first");
		var cloth = {
			type: 3,	// add
			id: $item.data("id")
		};
		$.ajax({
			type: "POST",
			url: "php/cart.php",
			data: cloth,
			dataType: "json",
			success: function (data) {
				if(data.code == 200){
					$item.find(".cart_cloth_num").text(parseInt($item.find(".cart_cloth_num").text())+1);
					updateTotal();
				}
			}
		});
	});

	// update the total fee
	function updateTotal(){
		var sum = 0;
		$(".cart_items>.item").each(function(i,v){
			sum += $(v).data("price") * $(v).find(".cart_cloth_num").text();
		});
		$(".cart_total").text(sum);
	}
});
