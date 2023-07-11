<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\mushroomProduct;
use App\Models\addproducts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('addProductForm',[mushroomProduct::class,'addProductForm']);
route::post('formSave',[mushroomProduct::class,'save']);

route::get('orderPage/{id}',[mushroomProduct::class,'orderPage']);
route::post('orderFormSave',[mushroomProduct::class,'orderSave']);

route::get('homepage',[mushroomProduct::class,'index']);
route::post('customerquery',[mushroomProduct::class,'customerquery']);


route::get('allProducts',[mushroomProduct::class,'allProducts']);
route::get('oysterMushroom',[mushroomProduct::class,'oysterMushroom']);
route::get('buttonMushroom',[mushroomProduct::class,'buttomMushroom']);
// route::post('orderFormSave',[mushroomProduct::class,'orderSave']);

route::get('productDetails/{id}',[mushroomProduct::class,'productDetails']);

// admin DAshboard
route::get('adminDashboard',[mushroomProduct::class,'adminDashboard']);
route::get('viewUploadProduct',[mushroomProduct::class,'viewUploadProduct']);

route::get('orderDetails',[mushroomProduct::class,'orderDetails']);
route::get('customerQueryView',[mushroomProduct::class,'customerQueryView']);
route::get('addFormEdit/{id}',[mushroomProduct::class,'addFormEdit']);
route::put('addFormUpdate/{id}',[mushroomProduct::class,'addFormUpdate']);
