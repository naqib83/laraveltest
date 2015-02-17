<?php

class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		$myname = 'Naqib Hossain';
                return View::make('hello')->with('name', $myname);
	}
        
        public function about()
	{
		$myname = 'Naqib Hossain';
                return View::make('about')->with('name', $myname);
	}

}
