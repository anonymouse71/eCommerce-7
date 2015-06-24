@extends('layouts.main')

@section('promo')

    <div class="dj-slides">
		<div class="dj-slide s-red">
            <div class="dj-summer-sale">
              <p class="dj-promo">
              	The &nbsp;<span>D&amp;J</span>&nbsp; SUMMER &nbsp;<span>SALE</span>
              </p>
              <div class="dj-promo-tablet">
              	<p>the D&amp;J</p>
              	<p>summer sale</p>
              </div>
              <p class="deal-lg">50-70% OFF ALL CLEARANCE</p>
              <div class="deal-sm">
              	<div class="summer-discount">50-70
              		<span class="percentbox">%</span> 
              		<span class="percentoff">OFF</span>
              	</div> 
              </div>
              <div class="deal-sm">
              	<p class="clearance">ALL CLEARANCE</p>
              </div>
              <p class="online">ONLINE PRICE REFLECTS DISCOUNT</p>
              <div class="promo-buttons">
              	<a href="#" class="reg-button">shop mens</a>
              	<a href="#" class="reg-button">shop womens</a>
              </div>
              <p class="promo-code">
              	Online only. Off original prices. <span>Promo code: WeilaD&amp;J</span>
              </p>
            </div>
        </div><!--Slide 1-->

        <div class="dj-slide s-white">
        </div><!--Slide 2-->

        <div class="dj-slide s-blue">
        </div><!--Slide 3-->
	</div> <!-- dj-slides -->

@stop

@section('content')
 
    <div class="wrapper">
 		<div class="title">
     		<h2>trending products</h2>
     	</div>

     	<div class="product_grid">
     		@foreach($products as $product)
     		    <div class="product_item">
  	     			<div class="product_details">
  	     				<a href="product/{{ $product->id }}">
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

@stop