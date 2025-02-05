<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\BrandController as AdminBrandController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\OrderController as AdminOrderController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DiscountController as AdminDiscountController;
use App\Http\Controllers\admin\ReviewController as AdminReviewController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('dashboard', AdminDashboardController::class);
    Route::resource('categories', AdminCategoryController::class)->names([
        'index' => 'admin.categories.index',
        'store' => 'admin.categories.store',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]);
    Route::resource('brands', AdminBrandController::class)->names([
        'index' => 'admin.brands.index',
        'store' => 'admin.brands.store',
        'update' => 'admin.brands.update',
        'destroy' => 'admin.brands.destroy',
    ]);
    Route::resource('users', AdminUserController::class)->names([
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);
    Route::resource('products', AdminProductController::class)->names([
        'index' => 'admin.products.index',
        'store' => 'admin.products.store',
        'show' => 'admin.products.show',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ]);
    Route::resource('orders', AdminOrderController::class)->names([
        'index' => 'admin.orders.index',
        'store' => 'admin.orders.store',
        'update' => 'admin.orders.update',
        'destroy' => 'admin.orders.destroy',
    ]);
    Route::resource('reviews', AdminReviewController::class)->names([
        'index' => 'admin.reviews.index',
        'store' => 'admin.reviews.store',
        'update' => 'admin.reviews.update',
        'destroy' => 'admin.reviews.destroy',
    ]);
    Route::resource('discount', AdminDiscountController::class)->names([
        'index' => 'admin.discount.index',
        'store' => 'admin.discount.store',
        'update' => 'admin.discount.update',
        'destroy' => 'admin.discount.destroy',
    ]);
});
