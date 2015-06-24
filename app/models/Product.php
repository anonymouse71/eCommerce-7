<?php

class Product extends Eloquent {
	protected $fillable = [];

	public function category() {
		return $this->belongsTo('Category');
	}

	public function sizes() {
		return $this->belongsToMany('Size');
	}

	public function colors() {
		return $this->belongsToMany('Color')
		  ->withPivot('img_tn1', 'img_tn2', 'img_tn3', 'img_md1', 'img_md2', 'img_md3', 'img_lg1', 'img_lg2', 'img_lg3');
	}
}