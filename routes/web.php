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

Route::view('/', 'layout'); //(LINK EXTENSION, VIEW FILE NAME)

Route::get('/contact', function () {
    return view('contact');
});

Route::view('contact-us', 'contact')->name('');
Route::view('layout', 'layout')->name(''); 

Route::get ('cus', 'CustomerController@list')->name('');

Route::get ('add', 'StudentController@add')->name('');
Route::post ('add', 'StudentController@addSub')->name('');
// Route::post ('add-student', 'StudentController@addSub')->name('add.student');
Route::get ('del/{id}', 'StudentController@del')->name('del');
Route::get ('delete/{id}', 'StudentController@delete')->name('delete');
Route::post ('delete/{id}', 'StudentController@deleteSub')->name('deleteSub');
Route::get ('edit/{id}', 'StudentController@edit')->name('edit');
Route::post ('edit/{id}', 'StudentController@editSub')->name('edit.student');
Route::get ('show', 'StudentController@show')->name('');











// Route::view('cus', 'sub.customer'); 

// Route::get('/cus', function () {
//     $cus_arr=[
//         'Tahmeed',
//         'Mahbub',
//         'Rafid',
//         'Shahir'
//     ];
//     return view('sub.customer', [
//         'pass_cus_arr' => $cus_arr, // VARIABLE THAT WILL PASS TO OTHER PAGE => VAR NAME IN THIS PAGE
//     ]);
// });
