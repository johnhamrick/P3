<?php

Route::get('/', function() {
	return View::make('index');
});

Route::get('/lorem_ipsum', function() {
	
	// instantiate new loremGenerator Obj to be passed to the View
	$data['numberOfParas'] = 0;
	$data['paragraphs'] = '';
	
	return View::make('lorem_ipsum') -> with('data', $data);
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

Route::get('/random_user', function() {

	// instantiate new userGenerator Obj to be passed to the View
	$data['numberOfUsers'] = 0;
	$data['users'] = '';
	
	return View::make('random_user') -> with('data', $data);
});

Route::post('/random_user/', function() {
	$numberOfUsers = Input::get('numberOfUsers');
	
	// instantiate new userGenerator Obj to be passed to the View
	$userGenerator = new UserGenerator($numberOfUsers);
	$users = $userGenerator->getUsers();
	
	$data['numberOfUsers'] = $numberOfUsers;
	$data['users'] = $users;
	
	return View::make('random_user')
		->with('data', $data);
});