@extends('layouts.main')

@section('content')

    <div class="dj-shopping-cart">
        <div class="shopping-cart-table">
        	<div class="cart-header-section">
				<p class="cart-title">Your Cart <span>({{ Cart::count() }} items)</span></p>
				{{ HTML::link('/', 'Continue Shopping', array('class' => 'continue-shopping')) }}
			</div>

           @foreach($products as $product)
			<div class="cart-item-details">
				<div class="item-info">
					<div class="image-column">
						{{ HTML::image($product->options->image, $product->options->image) }}
					</div>
					<div class="details-column">
						<a class="item-name" href="/store/product/{{ $product->id }}">
							<p>{{ $product->options->supplier }} - {{ $product->name }}</p>
						</a>
						<p class="sku">SKU: <span>0606-900{{ $product->id}}</span></p>
						<p>Gender: <span>{{ $product->options->category }}'s</span></p>
						<p>Color: <span>{{ $product->options->color }}</span></p>
						<p>Size: <span>{{ $product->options->size }}</span>
						    @if($product->options->availability === '1') 
							   <span>In Stock</span></p>
							@else
							   <span>Out of Stock</span>
							@endif
						{{ Form::open(array('url' => '/cart/update/' . $product->rowid)) }}
						<p class="dj-mobile-price">Price: 
							<span>${{ $product->price }} @ </span> 
							<span><input class="input-control mobile-update-input" type="text" name="qty" value="{{ $product->qty }}"></span>
						</p>
						<ul>
							<li><button class="reg-button update-btn">Update</button></li>
							<li><a href="/cart/remove/{{ $product->rowid }}" class="reg-button">Remove</a></li>
						</ul>
					</div>
					<div class="unitprice-column">
						<p class="dj-price-info">Price:</p>
						<p class="dj-price">${{ $product->price }}</p>
					</div>
					<div class="qty-column">
						<p class="dj-price-info">Quantity:</p>
						<p class="update-input">
							<input class="input-control" type="text" name="qty" value="{{ $product->qty }}">
						</p>
					</div>
					{{ Form::close() }}
					<div class="total-column">
						<p class="dj-price-info">Item Total:</p>
						<p class="dj-price right">${{ $product->qty * $product->price }}</p>
					</div>
				</div>
			</div> <!-- cart-item-details -->
			@endforeach
        </div>

        <div class="order-summary">
	        	<div class="summary-wrapper">
	        		<div class="cart-calculation">
	        			<h3>Order Summary <span>({{ Cart::count() }} items)</span></h3>
	        			<div class="promo-applied">
	        				<input type="text" class="input-control promo-code-input" placeholder="Enter Promo Code" />
	        				<button class="primary-button promo-code-btn">
	        					Apply <span class="fa fa-chevron-circle-right"></span>
	        				</button>
	        			</div>

	        			<div class="order-subtotal">
	        				<div class="item-subtotal">
	        					<div class="summary-label">Subtotal:</div>
	        					<div class="summary-value">{{ Cart::total() }}</div>
	        				</div>
	        				<div class="shipment-cost">
	        					<div class="summary-label">Estimated Delivery</div>
	        					@if(Cart::total() > 49)
	        					   <div class="summary-value discount">FREE</div>
	        					@else
	        					   <div class="summary-value discount">Estimating...</div>
	        					@endif
	        				</div>
	        			</div>

	        			<div class="order-totals">
	        				<div class="order-total">
	        					<div class="summary-row">
		        					<div class="summary-label">Total:</div>
		        					<div class="summary-value">{{ Cart::total() }}</div>
		        				</div>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="checkout-section">
	        			{{ Form::open(array('url' => '/cart/checkout')) }}
	        				<button class="primary-button payment-checkout">
	        					Checkout <span class="fa fa-chevron-circle-right"></span>
	        				</button>
	        			{{ Form::close() }}
	        			<div class="checkout-or">or</div>

	        			<form>
	        				<button class="primary-button paypal-checkout">
	        					<span>Checkout with</span>
	        				</button>
	        			</form>
	        		</div>

	        		<div class="shipping-section">
	        		   
	        		    <div class="shipping-tips">
	        		    	{{ HTML::image('images/products/shopnow.png', 'Image for shopping bag', array('class' => 'shopping-bag')) }}
	        		    	<p>Free shipping</p>
	        		    	<span>on order over $49</span>
	        		    </div>
	        		</div>
	        	</div> <!-- summary-wrapper -->
	        </div> <!-- order-summary -->
    </div>

@stop