@extends('layouts.main')

@section('content')

    <div class="wrapper">
		<div class="container">
    		<div class="products_sum">
	    		<p>
	    			{{ HTML::link('/', 'Home') }} <span> / </span>
	    			{{ HTML::link('store/category/' . $category->id, $category->name, array('class' => 'category-name')) }}<span> / </span>
	    			{{ HTML::link('store/category' . $category->id, "All") }}
	    		</p>
	    		<h3>
	    		    <span>({{ $total }} products)</span>
	    		</h3>
    		</div>

    		<div class="products_list">
	    		<div class="wrapper">

	    			<div class="product_grid">
			     		@foreach($products as $product)
			     		    <div class="product_item">
			  	     			<div class="product_details">
			  	     				<a href="store/product/{{ $product->id }}">
			  	     					{{ HTML::image($product->image, $product->title)}}
			  	     					<div class="product_info">
			  	     						<h3>{{ $product->title }}</h3>
			  		     		    	    <h4>{{ $product->supplier }} - <span class="category-name">{{ $product->category->name }}</span> </h4>
			  		     		    	    <p>
			  		     		    	    	@if($product->price === $product->promo_price)
			  			     		    	    	<span class="original">{{ $product->price }}</span>
			  			     		    	    @else
			  			     		    	    	<span class="discount">{{ $product->promo_price }}</span>
			  			     		    	    	<span class="original">{{ $product->price }}</span>
			  			     		    	    @endif
			  		     		    	    </p>
			  	     					</div>
			  		     				<div class="shopnow">
			  		     					{{ HTML::image('images/products/shopnow.png', 'Image for Shopping Bag')}}
			  			     		    </div>
			  			     		</a>			     				
			  	     			</div>
			  	     		</div>
			     		@endforeach
			     	</div>

	    		</div>
	    	</div>
    	</div>
    </div>

@stop
