<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\TestimonyController;
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
    return view('index');
});

Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/gallery', function () { return view('gallery'); });
Route::post('/newsletter/add', [NewsletterController::class, 'addEmail'] );
Route::post('/newsletter/remove', [NewsletterController::class, 'removeEmail'] );


Route::group(['prefix'=>'control', 'as'=>'admin.', 'middleware'=> [] ], function (){
    Route::get('/', function () { return view('admin.index'); });
    Route::get('/testimonial', function () { return view('admin.testimonial'); });





    Route::post('/testimonial/add_new', [TestimonyController::class, 'addTestimony']);
    Route::post('/testimonial/edit', [TestimonyController::class, 'editTestimony']);
    Route::get('/testimonial/delete/{id}', [TestimonyController::class, 'deleteTestimony']);



});
