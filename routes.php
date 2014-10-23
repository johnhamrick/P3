<?php

/*
|-------------------------------------------------------------
| Application Routes
|-------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze.  Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/{$x}', function($x)
{
	return View::make('index', $x)
});

Route::get('/LoremIpsumText', function()
{
	return View::make(LoremIpsumFactorum)
});