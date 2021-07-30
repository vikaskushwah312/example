<?php
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ShareGeniusController;


Route::prefix('admin')->middleware([web::class])->group(function () {

	Route::get('/', [HomeController::class, 'dashboard']);
	Route::get('dashboard', [HomeController::class, 'dashboard']);

	Route::get('share-genius', [ShareGeniusController::class, 'options']);
	Route::get('upload-symboll', [ShareGeniusController::class, 'uploadSymboll']);

	Route::post('post-upload-symboll', [ShareGeniusController::class, 'postUploadSymboll']);
		
});
/*git remote add origin https://github.com/vikaskushwah312/example.git
git branch -M main
git push -u origin main*/
