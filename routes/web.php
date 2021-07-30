<?php
use App\Http\Controllers\Admin\HomeController;

Route::prefix('admin')->middleware([web::class])->group(function () {

	Route::get('/', [HomeController::class, 'dashboard']);
});