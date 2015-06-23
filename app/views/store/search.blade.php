@extends('layouts.main')

@section('content')

   <div class="wrapper">
		<div class="container">
    		<div class="search-results">
	    		@if($results === 0)
                    <h2>No result was found for {{ $keyword }}</h2>
	    		@else
	    		    <h2>Search result for {{ $keyword }} ({{ $results }})</h2>
	    		    <hr>
	    		@endif
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