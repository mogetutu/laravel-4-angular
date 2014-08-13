<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layout');
});

Route::get('todos', function()
{
  return Todo::all();
});

Route::post('todos', function()
{
  return Todo::create(Input::only(['title', 'completed']));
});

Route::put('todos/{id}', function($id)
{
  $todo = Todo::find($id);
  $todo->update(Input::all());

  return $todo;
});

Route::delete('todos/{id}', function($id)
{
  Todo::destroy($id);
  return Response::json(null, 200);
});
