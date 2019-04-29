	<!-- хлебные крошки -->
	<div class="bread ">
		<div class="bread__flex conteiner">
			<div class="bread__left">
				<p class="bread__left-caption">New Arrivals</p>
			</div>
			<div class="bread__right">
				<a href="index.html" class="bread__right-text">Home</a>
				<p>&nbsp;/&nbsp;</p>
				<a href="catalog.html" class="bread__right-text">Men</p></a>
				<p>&nbsp;/&nbsp;</p>
				<p class="bread__right-text"><span class="bread__right-bold">New Arrivals </span></p>
			</div>			
		</div>
	</div>
	<!-- хлебные крошки -->
	
	<br><br>	
	<div style="text-align:center; color: red;">
		<h3 ><?=$order_msg; ?></h3>
	</div>

	<!--перечень заказов -->
	<app-main-cart :cart-list="cartList"></app-main-cart>
	<!--перечень заказов -->


	