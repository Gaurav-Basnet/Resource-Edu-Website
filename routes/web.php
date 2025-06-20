<?php


use App\Http\Controllers\applicationController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\messageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogPostController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\loginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/studyabroad', function () {
    return view('studyabroad');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/australia', function () {
    return view('australia');
});
Route::get('/canada', function () {
    return view('canada');
});
Route::get('/japan', function () {
    return view('japan');
});
Route::get('/uk', function () {
    return view('uk');
});
Route::get('/usa', function () {
    return view('usa');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/south_korea', function () {
    return view('south_korea');
});
Route::get('/european', function () {
    return view('european');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::post('/message', [messageController::class, 'message']);

Route::post('/appointments', [appointmentController::class, 'store'])->name('appointment.store');

Route::post('/application/store', [applicationController::class, 'store'])->name('application.store');





Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

// Protected Route - only after login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // create this view
    })->name('dashboard');
});


Route::post('/register', [RegisterController::class, 'register'])->name('register');


//newsletterSubscriber

Route::get('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');



Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogposts', BlogPostController::class)->only([
    'index', 'create', 'store'
]);

// Either use the resource route (recommended)
Route::resource('blogposts', BlogPostController::class)->only(['create', 'store']);

// OR explicitly define the create route
Route::get('/blogposts/create', [BlogPostController::class, 'create'])->name('blogposts.create');


Route::get('/blog/create', [blogPostController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [blogPostController::class, 'store'])->name('blog.store');

Route::get('/blogs', [blogController::class, 'index']);



//blogss
Route::get('/blogs/{id}', [blogController::class, 'show'])->name('blogs.show');

Route::get('/blogPost', function () {
    return view('blogPost');
});

