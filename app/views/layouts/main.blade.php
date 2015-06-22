<!DOCTYPE HTML>

<html lang="end" class="no-js">
<head>
	<title>D&amp;J - Ecommerce Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style('js/slick/slick.css') }}	
	{{ HTML::style('js/slick/slick-theme.css') }}	
	{{ HTML::style('css/application.css') }}	
	{{ HTML::style('css/font-awesome.min.css') }}	
	{{ HTML::script('js/nav/modernizr.js') }}
</head>

<body  class="nav-is-fixed nav-on-left">

	<header class="dj-main-header">
		<a class="dj-logo" href="/">
			{{ HTML::image('images/icons/d&amp;j-logo.png', 'Logo for D&amp;J') }}
		</a>

		<ul class="dj-header-buttons">
			<li><a class="dj-search-trigger" href="#dj-search">Search<span></span></a></li>
			<li><a class="dj-nav-trigger" href="#dj-primary-nav">Menu<span></span></a></li>
		</ul> <!-- dj-header-buttons -->

		<ul class="dj-right-section">
			<li class="user-account">
				<a class="fa fa-user" href="#">
					<span class="fa fa-caret-down"></span>
					<span class="fa fa-close" id="close-menu"></span>
				</a>
				@if(Auth::check())
					<ul>
						<li>Hello, {{ Auth::user()->firstname }}</li>
						<li>
							{{ HTML::link('users/myaccount', 'My Account') }}
						</li>
						<li>
							{{ HTML::link('users/logout', 'Logout') }}
						</li>
					</ul>
				@else
				    <ul>
						<li>
							{{ HTML::link('users/login', 'login') }}	
						</li>
						<li>
							{{ HTML::link('users/signup', 'Sign Up') }}
						</li>
					</ul>
				@endif
			</li>
			<li>
				<a class="fa fa-shopping-cart" href="cart.html">
					<span class="item-number">8</span>
				</a>
			</li>
		</ul>
	</header> <!-- end header -->

	@if(Session::has('message'))
        <div class="dj-alert-message">
        	{{ Session::get('message') }} 
        	<span class="fa fa-close" id="close-message"></span>
        </div>

    @endif

	<main class="dj-main-content">

        @yield('promo')

        @yield('search-keyword')

		@yield('content')

		@yield('pagination') 

	</main>

	<div class="dj-overlay"></div> <!-- end overlay -->

	<nav class="dj-nav">
		<ul id="dj-primary-nav" class="dj-primary-nav is-fixed">
			@foreach($catnav as $cat)
			<li class="has-children">
			    {{ HTML::link('store/category/' . $cat->name, $cat->name) }}

				<ul class="dj-secondary-nav is-hidden">
					<li class="go-back"><a href="#0">Menu</a></li>
					<li class="see-all">

						@if( $cat->name === 'kids')
							{{ HTML::link('store/category/' . $cat->name, 'Shop All Youth &amp; Children') }}
						@else
							{{ HTML::link('store/category/' . $cat->name, 'Shop All ' . ucfirst($cat->name) . '\'s') }}
						@endif
						<span class="fa fa-caret-right"></span>
					</li>
					<li class="has-children">
						<span>Accessories</span>

						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All Accessories</a></li>
							<li><a href="#0">Beanies</a></li>
							<li><a href="#0">Caps &amp; Hats</a></li>
							<li><a href="http://codyhouse.co/?p=409">Glasses</a></li>
							<li><a href="http://codyhouse.co/?p=409">Gloves</a></li>
							<li><a href="http://codyhouse.co/?p=409">Jewellery</a></li>
							<li><a href="http://codyhouse.co/?p=409">Scarves</a></li>
							<li><a href="http://codyhouse.co/?p=409">Wallets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Watches</a></li>
						</ul>
					</li>

					<li class="has-children">
						<span>Bottoms</span>

						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All Bottoms</a></li>
							<li><a href="http://codyhouse.co/?p=409">Casual Trousers</a></li>
							<li><a href="#0">Jeans</a></li>
							<li><a href="#0">Leggings</a></li>
							<li><a href="#0">Shorts</a></li>
						</ul>
					</li>

					<li class="has-children">
						<span>Jackets</span>

						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All Jackets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Blazers</a></li>
							<li><a href="http://codyhouse.co/?p=409">Bomber jackets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Denim Jackets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Duffle Coats</a></li>
							<li><a href="http://codyhouse.co/?p=409">Leather Jackets</a></li>
							<li><a href="http://codyhouse.co/?p=409">Parkas</a></li>
						</ul>
					</li>

					<li class="has-children">
						<span>Tops</span>

						<ul class="is-hidden">
							<li class="go-back"><a href="#0">Clothing</a></li>
							<li class="see-all"><a href="http://codyhouse.co/?p=409">All Tops</a></li>
							<li><a href="http://codyhouse.co/?p=409">Cardigans</a></li>
							<li><a href="http://codyhouse.co/?p=409">Coats</a></li>
							<li><a href="http://codyhouse.co/?p=409">Hoodies &amp; Sweatshirts</a></li>
							<li><a href="http://codyhouse.co/?p=409">Jumpers</a></li>
							<li><a href="http://codyhouse.co/?p=409">Polo Shirts</a></li>
							<li><a href="http://codyhouse.co/?p=409">Shirts</a></li>
							<li><a href="#0">T-Shirts</a></li>
							<li><a href="http://codyhouse.co/?p=409">Vests</a></li>
						</ul>
					</li>
				</ul>

			</li>
			@endforeach

			<li>
				{{ HTML::link('store/contact', 'Contact') }}
			</li>
		</ul> <!-- primary-nav -->
	</nav> <!-- dj-nav -->

	<div id="dj-search" class="dj-search">
		<form class="search-form">
			<input type="search" placeholder="What are you looking for?">
		</form>
	</div>

	<footer class="dj-footer">
		<div class="top-footer">
			<div class="footer-container">

				<div class="social">
					<p>connect with us: </p>
					<a href="#" class="icon"><span class="fa fa-facebook"></span></a>
			        <a href="#" class="icon"><span class="fa fa-twitter"></span></a>
			        <a href="#" class="icon"><span class="fa fa-google-plus"></span></a>
			        <a href="#" class="icon"><span class="fa fa-pinterest-p"></span></a>
			        <a href="#" class="icon"><span class="fa fa-youtube"></span></a>
			        <a href="#" class="icon"><span class="fa fa-instagram"></span></a>
			        <a href="#" class="icon"><span class="fa fa-rss"></span></a>
				</div>

				<div class="payment-methods">
					Accept Payment Types:
					{{ HTML::image('images/footer/payment-methods.gif') }} 
				</div>

			</div>		
		</div> <!-- top-footer -->

		<div class="bottom-footer">
			<div class="footer-container">

				<div class="top-section">
					<div class="info-list">
						<h3 id="weila" class="shop-title">shop</h3>
						<ul>
							<h4>men</h4>
						    <li><a href="products.html">Men's Shoes</a></li>
				            <li><a href="products.html">Men's Clothing</a></li>
				            <li><a href="products.html">Men's Accessories</a></li>
				        </ul>
				        <ul>
							<h4>women</h4>
						    <li><a href="products.html">Women's Shoes</a></li>
				            <li><a href="products.html">Women's Clothing</a></li>
				            <li><a href="products.html">Women's Accessories</a></li>
				        </ul>
				    </div>

				    <div class="info-list">
						<h3>featured</h3>
						<ul>
						    <li><a href="products.html">New Arrivals</a></li>
				            <li><a href="products.html">Top Sellers</a></li>
				            <li><a href="products.html">Best Rated</a></li>
				        </ul>
				        <h3 class="list-title">mobile</h3>
						<ul>
						    <li><a href="products.html">D&amp;J iPhone App</a></li>
						    <li><a href="products.html">D&amp;J iPad App</a></li>
				            <li><a href="products.html">D&amp;J Android App</a></li>
				        </ul>
					</div>

					<div class="info-list">
						<h3>About Us</h3>
						<ul class="social">
						    <li><a href="products.html">Our Company</a></li>
				            <li><a href="products.html">Careers</a></li>
				            <li><a href="products.html">Investor Relation</a></li>
				            <li><a href="products.html">Supply Chain</a></li>
				            <li><a href="products.html">Newsroom</a></li>
				            <li><a href="products.html">Store Locator</a></li>
				        </ul>
				    </div>

				    <div class="info-list">
						<h3>get help</h3>
						<ul>
						    <li>{{ HTML::link('users/myaccount', 'My Account') }}</li>
				            <li><a href="products.html">Shipping &amp; Delivery</a></li>
				            <li><a href="products.html">Returns &amp; Exchanges</a></li>
				            <li><a href="products.html">Customer Service</a></li>
				            <li><a href="products.html">Contact Us</a></li>
				            <li><a href="products.html">Payment Options</a></li>
				        </ul>
				    </div>
				</div> <!-- top-section -->
				
				<div class="bottom-section">
					<div class="dj-copyright">
						&copy; 2015 D&J, Inc. All right reserved.
					</div>

					<div class="dj-policy">
						<ul class="policy">
		 					<li>guides</li>
		 					<li>term &amp; conditions</li>
		 					<li>privacy policy</li>
		 				</ul>
					</div>
				</div> <!-- bottom-section -->
			</div>
			
		</div> <!-- bottom-footer -->
	</footer> <!-- dj-footer -->

    {{ HTML::script('js/nav/jquery-2.1.1.js') }}
    {{ HTML::script('js/slick/slick.min.js') }}
    {{ HTML::script('js/nav/jquery.mobile.custom.min.js') }}
    {{ HTML::script('js/nav/main.js') }} 
</body>
</html>
