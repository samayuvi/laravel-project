<?php
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
function allData($product_id){
     $srcs = DB::select('select src from images where product_id=?',[$product_id]);

     return view('product', ['data' =>'hello']);
}

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/twogis', function () {
    return view('twogis');
})->name('twogis');
Route::get('/product',function (){
    $srcs = DB::select('select src from images where product_id=1');
    
    return view('product', ['data' =>$srcs]);
})->name('product');

Route::post('/contact/submit','App\Http\Controllers\ContactController@submit')->name('form-contact');
