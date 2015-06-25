<?php

use Stripe\Stripe;
use Stripe\Charge;

class CartController extends BaseController {
    
    public function __construct() {
     	parent::__construct();
     	$this->beforeFilter('csrf', array('on' => 'post'));
     	$this->beforeFilter('auth', array('only' => array('getIndex, postAdd', 'postUpdate', 'getRemove')));
     }

	/**
	 * Display a listing of the resource.
	 * POST /cart/add
	 *
	 * @return Response
	 */
	public function postAdd()
	{
		$product = Product::find(Input::get('id'));
		$quantity = Input::get('quantity');
		$size = Input::get('size');
		$color = Input::get('color');
		
		Cart::add(array(
			'id' => $product->id, 
			'name' => $product->title, 
			'qty' => $quantity, 
			'price' => $product->promo_price,
			'options' => array(
				'size' => $size,
				'color' => $color,
				'image' => $product->image,
				'availability' => $product->availability,
				'supplier' => $product->supplier,
				'category' => $product->category->name
			)
		));

		return Redirect::to('cart/index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cart/index
	 *
	 * @return Response
	 */
	public function getIndex()
	{
	    return View::make('cart.index')
	      ->with('products', Cart::content());
	}

	/**
	 * Display the specified resource.
	 * PUT /cart/{id}
	 *
	 * @param  int  $rowid
	 * @return Response
	 */
	public function postUpdate($rowid)
	{
		$qty = Input::get('qty');

		Cart::update($rowid, $qty);

		return Redirect::to('/cart/index');
	}

	/**
	 * Store a newly created resource in storage.
	 * DELETE /cart/remove/{rowid}
	 *
	 * @param  int  $rowid
	 * @return Response
	 */
	public function getRemove($rowid) {
		
		Cart::remove($rowid);

        return Redirect::to('/cart/index');
    }

	/**
	 * Show the form for editing the specified resource.
	 * POST /cart/checkout
	 *
	 * @return Response
	 */
	public function postCheckout()
	{
		return View::make('cart.checkout');
	}

	/**
	 * Update the specified resource in storage.
	 * POST /cart/payment
	 *
	 * @return Response
	 */
	public function postPayment()
	{   
        $total = Cart::total() * 100;
		// Set up Stripe private api key
		\Stripe\Stripe::setApiKey(Config::get('stripe.secret_key'));

		// Get the credit card details submitted by the form
		$token = Input::get('stripeToken');

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
			$charge = \Stripe\Charge::create(array(
			  "amount" => $total, 
			  "currency" => "usd",
			  "card"  => $token,
			  "description" => Auth::user()->email
			));

		} catch(\Stripe\CardError $e) {
			$e_json = $e->getJsonBody();
			$error = $e_json['error'];
		  	// The card has been declined
		  	// redirect back to checkout page or just display error message

			return Redirect::to('/cart/checkout')
			  ->withIinput()->with('card_errors',$error);
		}

		return Redirect::to('/cart/thanks');
	}

	/**
	 * Remove the specified resource from storage.
	 * GET /cart/thanks
	 *
	 * @return Response
	 */
	public function getThanks()
	{
		Cart::destroy();
		return View::make('cart.thanks');
	}

}