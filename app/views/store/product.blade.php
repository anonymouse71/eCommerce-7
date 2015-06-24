@extends('layouts.main')

@section('content')
   
    <div class="wrapper">
		<div class="product_index">
 			<p>
    			{{ HTML::link('/', 'Home') }}<span> / </span>
    			{{ HTML::link('store/category/' . $category->id, $category->name, array('class' => 'category-name')) }}<span> / </span>
    			<a>{{ $product->supplier }} {{ $product->title }}</a>
    		</p>
    	</div>

		<div id="product_content">
			<div class="image_container">
				<div class="image_list">
					<div class="thumbnail_list">
    					<ul id="image_tn">
    						<li>
    							{{ HTML::image($color->pivot->img_tn1, null, array('class' => 'gallery selectedImg')) }}
    						</li>
    						<li>
    							{{ HTML::image($color->pivot->img_tn2, null, array('class' => 'gallery')) }}
    						</li>
    						<li>
    							{{ HTML::image($color->pivot->img_tn3, null, array('class' => 'gallery')) }}
    						</li>
    					</ul>
    				</div>
				</div>
				<div class="image_gallery">
					<div class="big_img">
						{{ HTML::image($color->pivot->img_md1, null, array('id' => 'large_image')) }}
						{{ HTML::image('images/products/logo_s.png', null, array('id' => 'logo')) }}
						{{ HTML::image('images/details/zoom.png', null, array('id' => 'zoomin')) }}
				    </div>
					<div id="full_screen">
						<i class="fa fa-arrows-alt"></i>
						{{ HTML::link($color->pivot->img_lg1, 'view full screen') }}
					</div>
					<div id="overlay"><a class="close"></a></div>
				</div>
			</div>

			<div class="purchase_block">
				<section id="purchase_info">
					<h2>{{ $product->supplier }} {{ $product->title }}</h2>
					<h4>{{ $category->name }}'s product</h4>
					@if($product->price !== $product->promo_price)
					   <h3>{{ $product->promo_price }}<span>{{ $product->price }}</span></h3>
					@else
					   <h3 style="color:black;">{{ $product->price }}</h3>
					@endif
				</section>
				{{ Form::open(array('url' => 'cart/add', 'method' => 'post')) }}
				<section id="color_options">
					<div id="color_selected">
						&nbsp;color: <span>{{ $color->color }}</span>
						{{ Form::hidden('color', $color->color, array('id' => 'selected-color')) }}
					</div>
                    <ul class="color_list">
                    	@foreach($product->colors as $color)
                    	    <li><a><div class="{{ $color->color }}"></div></a></li>
						@endforeach
				</section>
				<section id="dropdown">
					<div class="size">
						{{-- {{ Form::select('size', $product->sizes, 'Select size', array('id' => 'size')) }} --}}
			            <select id="size" name="size">
			            	<option selected="selected" value="ss">Select size</option>
			            	@foreach($product->sizes as $size)
			            	    <option value="{{ $size->size }}">{{ $size->size }}</option>
		                    @endforeach
			            </select>
	                </div>
	                <div class="quantity">
			            <select id="quantity" name="quantity">
			            	<option selected="selected" value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="4">5</option>
		                    <option value="10">10</option>
			            </select>
	                </div>
				</section>
				<section id="add_to_bag">
					<div id="size_chart">
						{{ HTML::link('images/details/sizechart.png', 'size chart') }}
					</div>
					<div id="overLay"></div>
					{{ Form::hidden('id', $product->id) }}
					<button id="buy_button">
						add to bag&nbsp;&nbsp;<span class="fa fa-shopping-cart"></span>
					</button>
					{{ Form::close() }}
				</section>
				<section class="product_specifc">
					<div id="product_desc">
					  <h3>product description</h3>
					  <div id="product_cont">
					  	<div id="description">
						  	<h4>description</h4>
						  	<p>{{ $product->description }}</p>
						</div>
						<div id="details">
					  	    <h4>details</h4>
						  	<ul>
						  		<li>{{ $product->details }}</li>
						  		<li>Art.No. 49-4726</li>
						  	</ul>
						</div>
					  </div>
					</div>

					<div id="share">
					  <h3>share</h3>
					  <div id="social_media">
					  	<ul>
					  		<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
					  		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
					  		<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
					  		<li><a href="#"><span class="fa fa-pinterest-square"></span></a></li>
					  		<li><a href="#"><span class="fa fa-tumblr"></span></a></li>
					  	</ul>
					  </div>
					</div>
				</section>
			</div>
		</div>
	</div>

@stop