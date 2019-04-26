<div id="app">
	
	<header class="header">
		<div class="conteiner header-flex">
			<div class="header-left">
				<a class="logo" href="/index"><img class="logo-img" src="/img/logo-top.png" alt="logo">
					BRAN<span class="logo-d">D</span>
				</a>
				
				<div class="top-form-wrapper">
					<!-- выпадающее меню -->
					<div class="browse-btn">Browse &nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
						<div class="dropdown">
							<p class="dropdown__caption">Women</p>
							<ul class="dropdown__menu">
								<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
								<li class="dropdown__list"><a href="/catalog">Tops</a></li>
								<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
								<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
								<li class="dropdown__list"><a href="/catalog">Denim</a></li>
								<li class="dropdown__list"><a href="/catalog">Leggings/Pants</a></li>
								<li class="dropdown__list"><a href="/catalog">Skirts/Shorts</a></li>
								<li class="dropdown__list"><a href="/catalog">Accessories </a></li>
							</ul>
							<p class="dropdown__caption">Men</p>
							<ul class="dropdown__menu">
								<li class="dropdown__list"><a href="/catalog">Tees/Tank tops</a></li>
								<li class="dropdown__list"><a href="/catalog">Shirts/Polos</a></li>
								<li class="dropdown__list"><a href="/catalog">Sweaters</a></li>
								<li class="dropdown__list"><a href="/catalog">Sweatshirts/Hoodies</a></li>
								<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
								<li class="dropdown__list"><a href="/catalog">Jackets/vests</a></li>
							</ul>
						</div>							
					</div>
					<!-- выпадающее меню -->
					<app-search></app-search>
				</div>
			</div>

			<div class="header-right">
				
				<!-- выпадающая корзина -->
				<app-mini-cart ref="appMiniCart" :cart-list="cartList"></app-mini-cart>
				<!-- выпадающая корзина -->

				<!-- регистрация и авторизация -->			
				<div class="button sign">My Account&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
					<div class="sign_drop">
						<a href="/checkout/" class="cart__button">Register Now</a>
						<a href="/checkout/" class="cart__button">Sign in</a>				
					</div>
				</div>
				<!-- регистрация и авторизация -->	
								
			</div>
		</div>
	</header>

	<!-- основное меню -->
	<nav class="navigation">
		<ul class="menu">
			<li><a href="/index" class="menu-list">Home</a></li>
			<li class="menu-list-li"><a href="/catalog" class="menu-list">Man</a></li>
			<li class="menu-list-li"><a href="/catalog" class="menu-list">Women</a>
				<div class="mega__menu">
					<div class="mega__menu-col">

						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
							<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
							<li class="dropdown__list"><a href="/catalog">Denim</a></li>
							<li class="dropdown__list"><a href="/catalog">Leggings/Pants</a></li>
							<li class="dropdown__list"><a href="/catalog">Skirts/Shorts</a></li>
							<li class="dropdown__list"><a href="/catalog">Accessories </a></li>
						</ul>
					</div>
					<div class="mega__menu-col">
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
							<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
						</ul>
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
						</ul>
					</div>
					<div class="mega__menu-col">
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
						</ul>
						<img src="/img/mega-menu.jpg" alt="картинка для мегаменю" class="mega__menu-img">
					</div>
				</div>
			</li>
			<li class="menu-list-li"><a href="/catalog.html" class="menu-list">Kids</a></li>
			<li class="menu-list-li"><a href="/catalog.html" class="menu-list">Accoseriese</a></li>
			<li class="menu-list-li"><a href="/catalog.html" class="menu-list">Featured</a></li>
			<li class="menu-list-li"><a href="/catalog.html" class="menu-list">Hot Deals </a>
				<div class="mega__menu mega-menu-last">
					<div class="mega__menu-col">

						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
							<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
							<li class="dropdown__list"><a href="/catalog">Denim</a></li>
							<li class="dropdown__list"><a href="/catalog">Leggings/Pants</a></li>
							<li class="dropdown__list"><a href="/catalog">Skirts/Shorts</a></li>
							<li class="dropdown__list"><a href="/catalog">Accessories </a></li>
						</ul>
					</div>
					<div class="mega__menu-col">
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
							<li class="dropdown__list"><a href="/catalog">Blazers</a></li>
						</ul>
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
						</ul>
					</div>
					<div class="mega__menu-col">
						<p class="dropdown__caption">Women</p>
						<ul class="dropdown__menu">
							<li class="dropdown__list"><a href="/catalog">Dresses</a></li>
							<li class="dropdown__list"><a href="/catalog">Tops</a></li>
							<li class="dropdown__list"><a href="/catalog">Sweaters/Knits</a></li>
						</ul>
						<img src="/img/mega-menu.jpg" alt="картинка для мегаменю" class="mega__menu-img">
					</div>
				</div>
			</li>
		</ul>
	</nav>
	<!-- основное меню -->