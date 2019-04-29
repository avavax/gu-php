	<!-- хлебные крошки -->
	<div class="bread ">
		<div class="bread__flex conteiner">
			<div class="bread__left">
				<p class="bread__left-caption">New Arrivals</p>
			</div>
			<div class="bread__right">
				<a href="/index" class="bread__right-text">Home</a>
				<p>&nbsp;/&nbsp;</p>
				<a href="/catalog" class="bread__right-text">Men</p></a>
				<p>&nbsp;/&nbsp;</p>
				<p class="bread__right-text"><span class="bread__right-bold">New Arrivals </span></p>
			</div>			
		</div>
	</div>
	<!-- хлебные крошки -->

	<!-- главная часть -->
	<main class="catalog conteiner">


		<!-- боковая колонка -->
		<aside class="catalog">
			<div class="catalog__item">
				<div class="catalog__item-cap">
					<p class="catalog__item-category">Category</p>
					<p class="catalog__item-drop"><i class="fa fa-caret-up" aria-hidden="true"></i></p>
				</div>
				<div class="catalog__item-list">
					<ul class="dropdown__menu">
						<li class="dropdown__list aside-menu"><a href="/catalog">Dresses</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Bags</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Denim</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Hoodies & Sweatshirts</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Jackets & Coats</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Pants</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Polos</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Shirts </a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Shoes</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Sweaters & Knits</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Tanks </a></li>						
					</ul>
				</div>
			</div>
			<div class="catalog__item">
				<div class="catalog__item-cap">
					<p class="catalog__item-category">Brand</p>
					<p class="catalog__item-drop"><i class="fa fa-caret-down" aria-hidden="true"></i></p>
				</div>
				<div class="catalog__item-list">
					<ul class="dropdown__menu">
						<li class="dropdown__list aside-menu"><a href="/catalog">Gucchi</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Armani</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Dolche Gabbana</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Slava Zaiceff</a></li>
					</ul>
				</div>				
			</div>
			<div class="catalog__item">
				<div class="catalog__item-cap">
					<p class="catalog__item-category">Design</p>
					<p class="catalog__item-drop"><i class="fa fa-caret-down" aria-hidden="true"></i></p>
				</div>
				<div class="catalog__item-list">
					<ul class="dropdown__menu">
						<li class="dropdown__list aside-menu"><a href="/catalog">Minimalism</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Econom</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Business</a></li>
						<li class="dropdown__list aside-menu"><a href="/catalog">Nuar</a></li>
					</ul>
				</div>
			</div>
		</aside>
		<!-- боковая колонка -->


		<div class="catalog__right">

			<!-- верхний фильтр -->
			<div class="top__filter">
				<div class="top__filter--item">
					<p class="top__filter--caption">Trending now</p>
					<div class="top__filter--box">
						<a class="top__filter-button" href="/catalog">Bohemian</a>
						<a class="top__filter-button" href="/catalog">Floral</a>						
						<a class="top__filter-button" href="/catalog">Lace</a>
						<a class="top__filter-button" href="/catalog">Floral</a>
						<a class="top__filter-button" href="/catalog">Lace</a>
						<a class="top__filter-button" href="/catalog">Bohemian</a>												
					</div>
				</div>
				<div class="top__filter--item">
					<p class="top__filter--caption">Trending now</p>
					<form action="#" class="filter__size">
						<div class="filter__size-item"><input type="checkbox" id="ch01"><label for="ch01">XXS</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch02"><label for="ch02">XS</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch03"><label for="ch03">S</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch04"><label for="ch04">M</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch05"><label for="ch05">L</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch06"><label for="ch06">XL</label></div>
						<div class="filter__size-item"><input type="checkbox" id="ch07"><label for="ch07">XXL</label></div>
					</form>
				</div>
				<div class="top__filter--item">
					<p class="top__filter--caption">PRICE</p>
					<input class="filter__price" type="range" min="52" max="400" step="1" value="50">
					<div class="filter_price-minmax">
						<p>$52</p>
						<p>$400</p>
					</div>
				</div>
			</div>
			<div class="sort__by">
				<p class="sort__by-text">Sort By</p>
				<select class="sort__by-select" name="#" id="#">
					<option>Name</option>
					<option>Price</option>
					<option>Size</option>
				</select>
				<p class="sort__by-text">Show</p>
				<select class="sort__by-select" name="#" id="#">
					<option>09</option>
					<option>12</option>
					<option>15</option>
					<option>18</option>
				</select>				
			</div>
			<!-- верхний фильтр -->
			
			<!-- сетка с вещами -->
			<div class="conteiner">
				<app-catalog ref="appCatalog" :quant="9"></app-catalog>
			</div>
			<!-- сетка с вещами -->

			<!-- пагинация -->
			<div class="pagin">
				<div class="pagin__left">
					<a href="#" class="pagin_num"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
					<a href="#" class="pagin_num pink">1</a>
					<a href="#" class="pagin_num">2</a>
					<a href="#" class="pagin_num">3</a>
					<a href="#" class="pagin_num">4</a>
					<a href="#" class="pagin_num">5</a>
					<a href="#" class="pagin_num">6</a>
					<p class="pagin_num">...<p>
					<a href="#" class="pagin_num">20</a>
					<a href="#" class="pagin_num"><i class="fa fa-angle-right" aria-hidden="true"></i></a>				
				</div>
				<a class="pagin__right button-white">View All</a>
			</div>
			<!-- пагинация -->

		</div>	
	</main>
	<!-- главная часть -->


	<!-- баннер и 3 преимущества -->
	<div class="features">
		<div class="conteiner features-flex ">
			<div class="feature__item">
				<img src="img/offer-car.png" alt="auto" class="feature__item-img">
				<h3 class="feature__item-caption">Free Delivery</h3>
				<p class="feature__item-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
			</div>
			<div class="feature__item">
				<img src="img/offer-procent.png" alt="auto" class="feature__item-img">
				<h3 class="feature__item-caption">Sales & discounts</h3>
				<p class="feature__item-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
			</div>
			<div class="feature__item">
				<img src="img/offer-crown.png" alt="auto" class="feature__item-img">
				<h3 class="feature__item-caption">Quality assurance</h3>
				<p class="feature__item-text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
			</div>
		</div>
	</div>
	<!-- баннер и 3 преимущества -->