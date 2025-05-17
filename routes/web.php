<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


//login routes
Route::get('/', [AuthController::class, 'login'])->name('user.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('user.authenticate');

//users routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/user/register', [AuthController::class, 'registerUser'])->name('user.register');
Route::get('/users', [UserController::class, 'index']);



//dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/add', [ProductController::class, 'add'])->name('products.add');
Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');



//Category Routes
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/add', [CategoryController::class, 'add'])->name('category.add');
Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');



//customers routes
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer/add', [CustomerController::class, 'add'])->name('customer.add');
Route::get('/customer/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
