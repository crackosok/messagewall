<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Message;
use Illuminate\Http\Request;

Route::get('/', function () {
    $messages = Message::orderBy('created_at', 'desc')->get();
    return view('messages', [
        'messages' => $messages
    ]);
})->name('index');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');


Route::get('/register/success', function () {
    return view('auth/reg_success');
})->name('reg_success');

Route::post('/add', function (Request $request) {
    $validator = Validator::make($request->all(), [
    'text' => 'required',
  ]);

  if ($validator->fails()) {
    return redirect('/')
      ->withInput()
      ->withErrors($validator);
  }

  $message = new Message;
  $message->message_text = $request->text;
  $message->author_id = Auth::user()->id;
  $message->save();

  return redirect('/');
});


Auth::routes();

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/logout', 'Auth\LoginController@logout');
