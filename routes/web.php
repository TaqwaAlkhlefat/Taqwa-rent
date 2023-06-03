<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\LessorDashboardController;
use App\Http\Controllers\ProductDashboardController;
use App\Http\Controllers\ReviewdashboardController;
use App\Http\Controllers\BookingdashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessorController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;


use App\Http\Controllers\Auth\RegistrationController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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
    return view('index');
});




Route::get('/', [HomeController::class, 'index'])->name('home');




// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Vehicles Page
// Route::get('/vehicle', function () {
//     return view('vehicle');
// })->name('vehicle');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Client Page
Route::get('/client', function () {
    return view('client');
})->name('client');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');


Route::get('/index', function () {
    return view('index');
})->name('index');

// lessor Page
// Route::get('/lessor', function () {
//     return view('lessor.index');
// })->name('lessor.index');


// Route::get('/lessor', 'LessorController@index')->name('lessor.index');
// Route::get('/', 'HomeController@index')->name('index');



Route::get('/lessor', [LessorController::class, 'index'])->name('lessor.index');

Route::put('/lessors/{lessor}', [LessorController::class, 'update'])->name('lessor.update');

Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
Route::post('/property', [PropertyController::class, 'store'])->name('property.store');

// Route::get('/user/profile', [UserController::class, 'show'])->name('user.profile');




Route::get('sign', function () {
    return view('sign_user');
});

Route::post('sign', [RegistrationController::class , 'sign_action'])->name('sign');


Route::get('sign_lessor', function () {
    return view('sign_lessor');
});

Route::post('sign_lessor', [RegistrationController::class , 'sign_lessor']);

Route::get('/vehicle', [ProductController::class, 'index'])->name('vehicle');

Route::get('/index', [ProductController::class, 'index'])->name('index');


Route::get('/singleproduct/{id}', [ProductController::class, 'show'])->name('singleproduct');


Route::post('/submit-rating', 'ProductController@submitRating');
Route::post('/get-ratings', 'ProductController@getRatings');

Route::resource('/admin/layout1', AdminController::class)->names([
    'index' => 'admin.layout1.index'
]);
Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard.index');
Route::get('/userdashboard/{id}', [UserDashboardController::class, 'show'])->name('userdashboard.show');
Route::get('/userdashboard/{id}/edit', [UserDashboardController::class, 'edit'])->name('userdashboard.edit');
Route::put('/userdashboard/{id}', [UserDashboardController::class, 'update'])->name('userdashboard.update');
Route::delete('/userdashboard/{id}', [UserDashboardController::class, 'destroy'])->name('userdashboard.destroy');
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.layout1.index');
Route::get('/lessordashboard', [LessorDashboardController::class, 'index'])->name('lessordashboard.index');
Route::get('/lessordashboard/{id}', [LessorDashboardController::class, 'show'])->name('lessordashboard.show');
Route::get('/lessordashboard/{id}/edit', [LessorDashboardController::class, 'edit'])->name('lessordashboard.edit');
Route::put('/lessordashboard/{id}', [LessorDashboardController::class, 'update'])->name('lessordashboard.update');
Route::delete('/lessordashboard/{id}', [LessorDashboardController::class, 'destroy'])->name('lessordashboard.destroy');

Route::get('/productdashboard', [ProductDashboardController::class, 'index'])->name('productdashboard.index');
Route::get('/productdashboard/{id}', [ProductDashboardController::class, 'show'])->name('productdashboard.show');
Route::get('/productdashboard/{id}/edit', [ProductDashboardController::class, 'edit'])->name('productdashboard.edit');
Route::put('/productdashboard/{id}', [ProductDashboardController::class, 'update'])->name('productdashboard.update');
Route::delete('/productdashboard/{id}', [ProductDashboardController::class, 'destroy'])->name('productdashboard.destroy');
 Route::get('/app-profile', [AdminController::class, 'showProfile'])->name('app-profile');

 Route::get('/reviewdashboard', [ReviewdashboardController::class, 'index'])->name('reviewdashboard.index');
 Route::get('/reviewdashboard/{id}', [ReviewdashboardController::class, 'show'])->name('reviewdashboard.show');
 Route::delete('/reviewdashboard/{id}', [ReviewdashboardController::class, 'destroy'])->name('reviewdashboard.destroy');

 Route::post('/search', [SearchController::class, 'search'])->name('search');


Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');



// Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');

Route::get('login', function () {
    return view('login');
});

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::post('/login', [RegistrationController::class, 'login'])->name('login');
 Route::get('/bookingdashboard', [BookingdashboardController::class, 'index'])->name('bookingdashboard.index');
 Route::get('/bookingtdashboard/{id}', [BookingdashboardController::class, 'show'])->name('bookingdashboard.show');


 Route::post('/logout', [RegistrationController::class, 'logout']);
 Route::post('/search', [SearchController::class, 'search'])->name('search');
 Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
//  Route::get('/singleproduct/{id}', [ProductController::class, 'show']);


Route::get('/map', function () {
    return view('map');
});
 Route::get('/users', [UserDashboardController::class, 'index'])->name('userdashboard.index');
