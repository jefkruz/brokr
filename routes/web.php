<?php

use App\Http\Controllers\ActController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



/*
|--------------------------------------------------------------------------
| HOMEPAGE ROUTES
|--------------------------------------------------------------------------
|
*/
Auth::routes();
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('redirect', [SocialController::class, 'redirect'])->name('redirect');
Route::get('callback', [SocialController::class, 'callback'])->name('callback');

Route::get('about', [MainController::class, 'about'])->name('about-us');
Route::get('privacy-policy', [MainController::class, 'policy'])->name('policy');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('contact-us',  [MainController::class, 'messages']);
Route::get('property/{slug}', [MainController::class, 'viewproperty'])->name('viewproperty');
Route::get('property', [MainController::class, 'property'])->name('property');
Route::get('blog', [MainController::class, 'posts'])->name('blog');
Route::get('viewpost/{slug}', [MainController::class, 'viewpost'])->name('viewpost');

Route::get('profile/share/{username}',  [MainController::class, 'profileshare'])->name('profileshare');
Route::get('register/{username}',  [RegisterController::class, 'showUniqueRegister']);
Route::post('register/{username}',  [RegisterController::class, 'uniqueRegister']);


/*
|--------------------------------------------------------------------------
| HOMEPAGE ROUTES END
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
|
*/

Route::get('referral', [HomeController::class, 'referrals'])->name('referrals');
Route::get('referral/{username}', [HomeController::class, 'viewreferral'])->name('view');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::put('profile/{id}', [HomeController::class, 'updateprofile'])->name('update');
Route::get('viewpost/{slug}', [HomeController::class, 'viewpost'])->name('viewpost');
Route::put('profile/image/{id}', [HomeController::class, 'updateimage'])->name('updateimage');
Route::resource('receipts', ReceiptController::class);
Route::get('commissions', [HomeController::class,'commission'])->name('viewcommission');
Route::get('download/{id}',  [ReceiptController::class, 'download'])->name('download');
/*
|--------------------------------------------------------------------------
| USER ROUTES END
|--------------------------------------------------------------------------
|
*/


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('receipts', [AdminController::class, 'receipts'])->name('receipts.admin');
    Route::get('showreceipts/{id}', [AdminController::class, 'showreceipts'])->name('receipts.view');
    Route::get('confirm/{id}',  [AdminController::class, 'confirm'])->name('confirm');
    Route::get('paid/{id}',  [AdminController::class, 'paid'])->name('paid');
    Route::get('birthdays', [AdminController::class, 'birthdays'])->name('birthdays');


//CRUD ROUTES
    Route::resource('acts', ActController::class);
    Route::resource('users', UserController::class);
    Route::resource('properties', PropertyController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('commissions', CommissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('clients', ClientController::class);





});


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES END
|--------------------------------------------------------------------------
|
*/
//EMAIL VERIFICATION ROUTES
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "Cleared!";

});
