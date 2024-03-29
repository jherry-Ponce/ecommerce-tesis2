<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebhooksController;
use App\Http\Livewire\CreateOrder;
use App\Http\Livewire\PaymentOrder;
use App\Http\Livewire\ShoppingCart;

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
//la ruta principal estar a cargo del controlador welcomwcontroller
Route::get('/', welcomeController::class);

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show'); 

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart'); 

Route::middleware(['auth'])->group(function(){

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('orders/create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment');

    Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');

    Route::post('webhooks', WebhooksController::class);
});



