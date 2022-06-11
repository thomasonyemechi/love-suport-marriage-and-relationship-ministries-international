<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\StoreController;
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
Route::post('/sendcontactmessage', [ContactController::class, 'sendContactMessage'] );



Route::group(['prefix'=>'control', 'as'=>'admin.', 'middleware'=> [] ], function (){
    Route::get('/', function () { return view('admin.index'); });
    Route::get('/testimonial', function () { return view('admin.testimonial'); });
    Route::get('/contact/messages', function () { return view('admin.view_contact_messages'); });
    Route::get('/store/', function () { return view('admin.add_product'); });
    


    Route::post('/store/add_new', [StoreController::class, 'addItemToStore']);

    Route::post('/testimonial/add_new', [TestimonyController::class, 'addTestimony']);
    Route::post('/testimonial/edit', [TestimonyController::class, 'editTestimony']);
    Route::get('/testimonial/delete/{id}', [TestimonyController::class, 'deleteTestimony']);



});
