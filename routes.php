<?php

Route::get('/', function() {
	return View::make('index');
});

Route::get('/lorem_ipsum/{numberOfParas?}', function($numberOfParas = 1) {
	
	// instantiate new loremGenerator Obj to be passed to the View
	$loremGenerator = new LoremGenerator($numberOfParas);
	$paragraphs = $loremGenerator->getParagraphs();
	
	$data['numberOfParas'] = $numberOfParas;
	$data['paragraphs'] = $paragraphs;
	
	return View::make('lorem_ipsum')
		->with('data', $data);
});

Route::post('/lorem_ipsum/', function() {
	$numberOfParas = Input::get('numberOfParas');
	
	// instantiate new loremGenerator Obj to be passed to the View
	$loremGenerator = new LoremGenerator($numberOfParas);
	$paragraphs = $loremGenerator->getParagraphs();
	
	$data['numberOfParas'] = $numberOfParas;
	$data['paragraphs'] = $paragraphs;
	
	return View::make('lorem_ipsum')
		->with('data', $data);
});

Route::get('/random_user/{numberOfUsers?}', function($numberOfUsers = 1) {

	// instantiate new userGenerator Obj to be passed to the View
	$userGenerator = new UserGenerator($numberOfUsers);
	$users = $userGenerator->getUsers();
	
	$data['numberOfUsers'] = $numberOfUsers;
	$data['users'] = $users;
	
	return View::make('random_user')
		->with('data', $data);
});

Route::post('/random_user', function() {
	$numberOfUsers = Input::get('numberOfUsers');
	
	// instantiate new userGenerator Obj to be passed to the View
	$userGenerator = new UserGenerator($numberOfUsers);
	$users = $userGenerator->getUsers();
	
	$data['numberOfUsers'] = $numberOfUsers;
	$data['users'] = $users;
	
	return View::make('random_user')
		->with('data', $data);
});

$v = Validator::make($input, $rules);

	if( $v->passes()) {

	# code for validation success!

	} else {

	# code for validation failure
}

);

	{{ $errors->first('email') }}

	{{ $errors->first('age') }}