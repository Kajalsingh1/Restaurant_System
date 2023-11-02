<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\FormController;
use App\Http\Controllers\backend\TableController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ItemController;
use App\Http\Controllers\backend\MainfoodController;
use App\Http\Controllers\backend\ReservationController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ContactController;

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


//login
Route::get('/', [AdminController::class, 'index']);
Route::post('login',[AdminController::class,'login'])->name('login');

//insert
Route::get('register', [AdminController::class, 'register']);
Route::post('register',[AdminController::class,'insert'])->name('register');

Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('form', [FormController::class, 'index']);
Route::get('table', [TableController::class, 'index']);

//logout
Route::get('logout', function () {
   Session :: flush();
   return  redirect('admin');
});

//category details
Route::get('category', [CategoryController::class, 'view']);
Route::get('category/add', [CategoryController::class, 'add']);
Route::post('addcategory',[CategoryController::class,'store'])->name('addcategory');
Route::get('category/update/{id}', [CategoryController::class, 'updated']);
Route::post('updatecategory',[CategoryController::class,'edit'])->name('updatecategory');
Route::get('category/delete/{id}', [CategoryController::class, 'delete']);

//items details
Route::get('item', [ItemController::class, 'itemview']);
Route::get('item/add', [ItemController::class, 'additem']);
Route::post('additem',[ItemController::class,'storeitem'])->name('additem');
Route::get('item/update/{id}', [ItemController::class, 'updateitem']);
Route::post('updateitem', [ItemController::class, 'edit'])->name('updateitem');
Route::get('item/delete/{id}', [ItemController::class, 'delete']);

//event details
Route::get('event', [EventController::class,'eventview']);
Route::get('event/add', [EventController::class, 'addevent']);
Route::post('addevent',[EventController::class,'storeevent'])->name('addevent');
Route::get('event/update/{id}', [EventController::class, 'updateevent']);
Route::post('updateevent', [EventController::class, 'edit'])->name('updateevent');
Route::get('event/delete/{id}', [EventController::class, 'delete']);

//mainfood details
Route::get('mainfood', [MainfoodController::class, 'view']);
Route::get('mainfood/add', [MainfoodController::class, 'add']);
Route::post('addmainfood',[MainfoodController::class,'store'])->name('addmainfood');
Route::get('mainfood/update/{id}', [MainfoodController::class, 'updated']);
Route::post('updatemainfood',[MainfoodController::class,'edit'])->name('updatemainfood');
Route::get('mainfood/delete/{id}', [MainfoodController::class, 'delete']);

//reservation details
Route::get('reservation', [ReservationController::class, 'view']);
Route::get('reservation/add', [ReservationController::class, 'add']);
Route::post('addreservation',[ReservationController::class,'store'])->name('addreservation');
Route::get('reservation/delete/{id}', [ReservationController::class, 'delete']);

//table details
Route::get('table', [TableController::class, 'view']);
Route::get('table/add', [TableController::class, 'add']);
Route::post('addtable',[TableController::class,'store'])->name('addtable');
Route::get('table/update/{id}', [TableController::class, 'updated']);
Route::post('updatetable',[TableController::class,'edit'])->name('updatetable');
Route::get('table/delete/{id}', [TableController::class, 'delete']);

//slider details
Route::get('slider', [SliderController::class, 'view']);
Route::get('slider/add', [SliderController::class, 'add']);
Route::post('addslider',[SliderController::class,'store'])->name('addslider');
Route::get('slider/update/{id}',[SliderController::class,'update']);
Route::post('updateslider',[SliderController::class,'edit'])->name('updateslider');
Route::get('slider/delete/{id}', [SliderController::class, 'delete']);

//contact details
Route::get('contact', [ContactController::class, 'view']);
