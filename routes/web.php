<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TestimonyController;
use App\Models\Store;
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
Route::get('/store', function () { return view('store'); });
Route::get('/cart', function () { return view('cart'); });
Route::get('/testimony', function () { return view('testimony'); });
Route::get('/event', function () { return view('event'); });
Route::get('/store/{slug}', function ($slug) { $item = Store::where('slug', $slug)->first();  return view('item', compact('item')); });
Route::post('/newsletter/add', [NewsletterController::class, 'addEmail'] );
Route::post('/newsletter/remove', [NewsletterController::class, 'removeEmail'] );
Route::post('/sendcontactmessage', [ContactController::class, 'sendContactMessage'] );
Route::post('/add_item_to_cart', [OrderController::class, 'addItemCart'] );
// Route::post('/checkout', [OrderController::class, 'startCheckOut'] );
Route::post('/verify_transaction', [OrderController::class, 'verifyFlutterwaveTransaction'] );
Route::get('/verify_transaction2/{trno}', [OrderController::class, 'verifyFlutterwaveTransaction2'] );
Route::post('/checkout', [OrderController::class, 'processFlutterWave'] );
Route::get('/cart/{user_id}/{track_id}', [OrderController::class, 'verifyPayment'] );
Route::get('/flutterwave/callback', [OrderController::class, 'callback'] )->name('flutterwave-callback');



Route::group(['prefix'=>'control', 'as'=>'admin.', 'middleware'=> [] ], function (){
    Route::get('/', function () { return view('admin.index'); });
    Route::get('/testimonial', function () { return view('admin.testimonial'); });
    Route::get('/event', function () { return view('admin.event'); });
    Route::get('/contact/messages', function () { return view('admin.view_contact_messages'); });
    Route::get('/store/', function () { return view('admin.add_product'); });
    Route::get('/store/{slug}', function ($slug) {
        $item = Store::where('slug', $slug)->first();
        return view('admin.product', compact('item'));
    });

    Route::post('/store/add_new', [StoreController::class, 'addItemToStore']);
    Route::get('/get_item_list', [StoreController::class, 'fetchStoreItem']);
    Route::get('/store/delete/{id}', [StoreController::class, 'deleteStoreItem']);

    Route::post('/testimonial/add_new', [TestimonyController::class, 'addTestimony']);
    Route::post('/testimonial/edit', [TestimonyController::class, 'editTestimony']);
    Route::get('/testimonial/delete/{id}', [TestimonyController::class, 'deleteTestimony']);


    Route::post('/event/add_new', [ProgramController::class, 'addEvent']);



});
