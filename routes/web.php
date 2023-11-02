<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MenuController;
use App\Http\Controllers\frontend\ReservationController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin', function () {
//     return view('master');
// });

// Route::get('form', function () {
//     return view('form');
// });

// Route::get('/', [DashboardController::class, 'index']);
// Route::get('form', [FormController::class, 'index']);
// Route::get('table', [TableController::class, 'index']);
// Route::get('login', [LoginController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::post('homereserve',[HomeController::class,'store'])->name('homereservation');
Route::get('menu', [MenuController::class, 'index']);

Route::get('reservation', [ReservationController::class, 'index']);
Route::post('reserve',[ReservationController::class,'insert'])->name('reservation');

Route::get('gallery', [GalleryController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('blog', [BlogController::class, 'index']);

Route::get('contact', [ContactController::class, 'index']);
Route::post('contactdetail', [ContactController::class, 'store'])->name('contacts');





//Clear route cache
Route::get('/route-cache', function () {
    \Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache
Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache
Route::get('/clear-cache', function () {
    \Artisan::call('cache:clear');
    return 'Application cache cleared';
});


// Clear view cache
Route::get('/view-clear', function () {
    \Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function () {
    \Artisan::call('optimize:clear');
    return 'View cache cleared';
});
