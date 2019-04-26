Vue.component('app-catalog', {
	data() {
		return {
			products: []
		}
	},
	props: ['quant'],
	methods: {
		filter(filterData) {
			const regexp = new RegExp(filterData, 'i');
			this.products.forEach(el => el.filter = regexp.test(el.product_name));
		}
	},
	mounted() {
		this.$parent.getJson(`/product-json`)
			.then(data => {
				for (let el of data) {
					if (!el.img) {
						el.img = 'img/default-placeholder.png';
					}
					el.filter = true;
					//el.discount = (el.discount === 1) ? true : false;
					this.products.push(el);

				}
			})
	
	},
	template: `
			<div class="goods__greed">
				<app-catalog-item class="goods__greed-one"
					v-for="item of products.slice(0, quant)"
					:key="item.id_product"
					:product="item"
					v-if="item.filter">
				</app-catalog-item>
			</div>`
});


Vue.component('app-catalog-item', {
	props: ['product'],
	template: `
		<div class="goods__greed-one">
				<div class="lenta-wrap" v-show="product.discount == 1">
					<div class="ribbon">Скидка</div>
				</div>			
			<a :href="'single/'+ product.id_product" class="img__link">
				<div class="goods__greed-img"><img :src="'/' + product.img" :alt="product.product_name"></div>
				<div class="goods__greed-text">
					<p class="goods__greed-item">{{product.product_name}}</p>
					<p class="goods__greed-cost">$ {{product.price}}</p>							
				</div>
			</a>
			<div class="mask"><a href="#" class="mask__add" 
				@click.prevent="$root.$refs.appMiniCart.addProduct(product)">Add to Cart</a></div>
		</div>`
});


Vue.component('app-single-item', {
	data() {
		return {
			products: [],
			item_id: 0, 
			product: []
		}
	},
	methods: {

	},
	mounted() {

		const addr = window.location.toString();
		const arr = addr.split('/');
		this.item_id = (arr[arr.length - 1] === '') ? arr[arr.length - 2] : arr[arr.length - 1];

		this.$parent.getJson(`/product-json`)
			.then(data => {
				for (let el of data) {
					if (!el.img) {
						el.img = 'img/default-placeholder.png';
					}
					el.filter = true;
					this.products.push(el);


				}
				this.products.forEach((el) => {
					if (el.id_product === this.item_id) {
						this.product = el;
					}						
				});				
		});
	},
	template: `
		<div>
			<!-- основной товар -->
			<div class="slider">
				<div class="slider-flex conteiner">
					<img :src="'/' + product.img" alt="picture">
				</div>
			</div>
			<div class="slider__desc conteiner">
				<p class="slider__category">WOMEN COLLECTION</p>
				<div class="devider">
					<div class="devider__long"></div>
					<div class="devider__shot"></div>
				</div>
				<p class="slider__name">{{product.product_name}}</p>
				<p class="slider__text">{{product.product_desc}}</p>
				<div class="slider__info">
					<div class="slider__info-text">MATERIAL: <span class="black">COTTON</span></div>
					<div class="slider__info-text">DESIGNER: <span class="black">BINBURHAN </span></div>
				</div>
				<p class="slider__cost">$ {{product.price}}</p>

				<!--<div class="slider__filter">
					<div class="slider__filter-item">
						<p class="slider__filter-text">CHOOSE COLOR</p>
						<select name="#" id="#" class="slider__filter-color">
							<option>RED</option>
							<option>GREEN</option>
							<option>BlUE</option>
						</select>
					</div>
					<div class="slider__filter-item">
						<p class="slider__filter-text">CHOOSE SIZE</p>
						<select name="#" id="#" class="slider__filter-size">
							<option>XXS</option>
							<option>XS</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
							<option>XXL</option>
						</select>
					</div>
					<div class="slider__filter-item">
						<p class="slider__filter-text">QUANTITY</p>
						<input class="slider__filter-quant" type="number" min="1" max="10" placeholder="2">
					</div>
				</div>-->

				<a class="add__single" href="#" @click.prevent="$root.$refs.appMiniCart.addProduct(product)"><img src="/img/cart-img-pink.svg" alt="cart">&nbsp;&nbsp;&nbsp;&nbsp;Add to Cart</a>		
			</div>
			<!-- основной товар -->
		</div>`
});


