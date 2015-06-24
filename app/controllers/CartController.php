<?php

class CartController extends BaseController {
    
    public function __construct() {
     	parent::__construct();
     	$this->beforeFilter('csrf', array('on' => 'post'));
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cart/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cart/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}