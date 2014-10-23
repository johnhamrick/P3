<?php

Route::get('/{$x}', function($x);
Route::get('user/{name}', function($name))
->where('name', '[A-Za-z]+');
Route::get('user/{id}', function($id))
->where('id', '[0-9]+');
{
	return View::make('index', $x)
});

Route::get('/LoremIpsumText', function()
{
	return View::make(LoremIpsumFactorum)
});

$rules = array(

	...

	);

$v = Validator::make($input, $rules);

if( $v->passes()) {

	# code for validation success!

} else {

	# code for validation failure
}

$rules = array(
	'username' 	=> 'Required|Min:3|Max:30|Alpha',
	'email'		=> 'Required|Between:3,50|Email|Unique:users',
	'password'	=> 'Required|AlphaNum|Min:7|Confirmed',
	'password_confirmation' => 'Required|AlphaNum|Min:7'

);

{{ $errors->first('email') }}

{{ $errors->first('age') }}