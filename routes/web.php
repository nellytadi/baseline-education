<?php

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
});

Route::get('/company-profile', function () {
    return view('company-profile');
});

Route::get('/why-us', function () {
    return view('why-us');
});

Route::get('/partners', function () {
    return view('partners');
});


//Services route
Route::get('/career-counselling', function () {
    return view('services.career-counselling');
});

Route::get('/admission-services', function () {
    return view('services.admission-services');
});
Route::get('/english-tests', function () {
    return view('services.english-tests');
});
Route::get('/visa-assistance', function () {
    return view('services.visa-assistance');
});
Route::get('/interview-preparations', function () {
    return view('services.interview-preparations');
});
//end services route


Route::post('/contact', 'ContactController@sendMail')->name('contact');