@extends('layouts.main')

@section('content')

   <div class="content-wrapper">
   	    <div class="dj-auth-header">
   	    	<div class="payment-details">
   	    		<p><span class="fa fa-shopping-cart"></span> Total: {{ Cart::total() }}</p>
   	    		<p> {{ Cart::count() }} Items</p>
   	    	</div>
			
			<div class="payment-types">
				<p>Accept Payment Types</p>
               {{ HTML::image('images/footer/payment-methods.gif', 'Image for Payment Methods') }}
			</div>
		</div>

		<div class="dj-auth-main">
			{{ Form::open(array('url' => 'cart/payment', 'id' => 'payment-form')) }}
               
                <div style="color:red" class="payment-errors"></div>
			    <div class="auth-input-row">
			    	<input type="text" name="card-holder" class="auth-input input-control" placeholder="Name on Card" />
			    </div>

			    <div class="auth-input-row">
			    	<input type="text" size="20" data-stripe="number" class="auth-input input-control" placeholder="Credit Card number" />
			    </div>

			    <div class="auth-input-row">
			    	<input type="text" size="2" data-stripe="exp-month" class="auth-input input-control" placeholder="Expired Month" />

			    	<input type="text" size="4" data-stripe="exp-year" class="auth-input input-control" placeholder="Expired Year" />
			    </div>

		    	<input type="text" size="4" data-stripe="cvc" class="auth-input input-control" placeholder="CVC*" />
			    
			    {{ Form::button('Submit Payment', array('type' => 'submit', 'class' => 'primary-button auth-button')) }}
			{{ Form::close() }}
		</div>
   </div>

@stop