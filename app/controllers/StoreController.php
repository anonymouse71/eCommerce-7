<?php

class StoreController extends BaseController {

     public function __construct() {
     	parent::__construct();
     	$this->beforeFilter('csrf', array('on' => 'post'));
     }
	/**
	 * Display a listing of the resource.
	 * GET /store/index
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$products = Product::take(4)->orderBy('updated_at', 'DESC')->get();
		return View::make('store.index')
		   ->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /store/category/{id}
	 *
	 * @return Response
	 */
	public function getCategory($cat_id)
	{
		$products = Product::where('category_id', $cat_id)->paginate(12);
		$total_product = Product::where('category_id', $cat_id)->count();
		$category = Category::find($cat_id);

		return View::make('store.category')
		   ->with('products', $products)
		   ->with('category', $category)
		   ->with('total', $total_product);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /store/search
	 *
	 * @return Response
	 */
	public function getSearch()
	{
		$query = Input::get('query');
		$products = Product::where('title', 'LIKE', '%' . $query . '%')->paginate(12);
		$results_num = Product::where('title', 'LIKE', '%' . $query . '%')->count();

		return View::make('store.search')
		  ->with('products', $products)
		  ->with('results', $results_num)
		  ->with('keyword', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /store/product/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getProduct($id)
	{
		$product = Product::find($id);
		$category = Category::where('id', $product->category_id)->first();
		// $first_color = null;

		foreach ($product->colors as $color) {
			$first_color = $color;
			break;
		}

		return View::make('store.product')
		  ->with('category', $category)
		  ->with('color', $first_color)
		  ->with('product', $product);
	}

}