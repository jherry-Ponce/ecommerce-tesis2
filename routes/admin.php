<?php

use App\Http\Livewire\Admin\CreateCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\PanelAdmin;
use App\Http\Livewire\Admin\ShowProducts;
use App\Http\Livewire\Admin\CreateProduct;
use App\Http\Livewire\Admin\users\RolesComponent;
use App\Http\Livewire\Admin\EditProduct;
use App\Http\Livewire\Admin\Provedor\CreateProveedor;
use App\Http\Livewire\Admin\Provedor\ShowProveedor;
use App\Http\Livewire\Admin\Slider\CreateSlider;
use App\Http\Livewire\Admin\Users\UserComponent;

Route::get('/', PanelAdmin::class)->name('admin.dashboard');
Route::get('/Product', ShowProducts::class)->name('producto.index');
Route::get('products/create', CreateProduct::class)->name('admin.products.create');
Route::get('products/{product}/edit',EditProduct::class )->name('admin.products.edit');
Route::get('categories/create', CreateCategory::class)->name('admin.categories.create');
Route::get('/slider', CreateSlider::class)->name('slider.index');
Route::get('/proveedores/create', CreateProveedor::class)->name('admin.provedor.create');
Route::get('/proveedores', ShowProveedor::class)->name('admin.provedor.show');
Route::get('Rol',RolesComponent::class)->name('admin.rol');
Route::get('Users',UserComponent::class)->name('admin.users');
