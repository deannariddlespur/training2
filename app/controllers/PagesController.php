<?php

class PagesController extends BaseController {

public function home()
	{
	  $name = 'John';
  
	return View::make('hello')->with('name', $name);
	}
	
	public function about()
	{
	return View::make('about');
	}
}