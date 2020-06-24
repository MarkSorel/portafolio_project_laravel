<?php

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes();
//Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
//Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update'); // para actualizar
//Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
//Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
////////////////////////////////////////------------------------------------------------------------------------