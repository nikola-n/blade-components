<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update([
        request()->validate(['body' => 'required']),
    ]);

    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    $comment->delete();

    return redirect('/');
});

Route::get('/about', function () {
    return view('welcome');
})->name('about');

Route::get('/testimonials', function () {
    return view('welcome');
})->name('testimonials');

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/contact-team', function () {
    return view('welcome');
});

Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::post('/posts', function () {
    request()->validate([
        'title' => 'required',
        'g-recaptcha-response' => ['required', new \App\Rules\Recaptcha()]
    ]);
    dd('Validation passed and we are ready to create the post.');
});
