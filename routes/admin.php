<?php
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/users', UsersController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/posts',PostsController::class);
});

?>
