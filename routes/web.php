<?php


use App\Http\Controllers\Admin\resourcePostingController;
use App\Http\Controllers\Admin\testemonialsPostingController;
use App\Http\Controllers\applicationController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\Admin\teamsPostingController;
use App\Http\Controllers\Admin\MockTestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogPostController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\PasswordController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\blogPostingController;
use App\Http\Controllers\Admin\galleryPostingController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\mediaController;
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
Route::get('/about', action: [resourceController::class, 'gettestimonials'])->name('testi.get');


Route::get('/services', function () {
    return view('services');
});

Route::get('/studyabroad', function () {
    return view('studyabroad');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact', action: [resourceController::class, 'getforcontact'])->name('testimonials.get');


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


Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

// Protected Route - only after login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('Auth.dashboard'); // create this view
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('Auth.profile'); // create this view
    })->name('profile');
});

Route::middleware('auth')->group(function () {
    Route::get('/ieltsgeneral', function () {
        return view('Auth.ieltsgeneral'); // create this view
    })->name('ieltsgeneral');
});

Route::middleware('auth')->group(function () {
    Route::get('/english', function () {
        return view('Auth.english'); // create this view
    })->name('english');
});

Route::middleware('auth')->group(function () {
    Route::get('/ieltsA1A2', function () {
        return view('Auth.ieltsA1A2'); // create this view
    })->name('ieltsA1A2');
});

Route::middleware('auth')->group(function () {
    Route::get('/general', function () {
        return view('Auth.general'); // create this view
    })->name('general');
});

Route::middleware('auth')->group(function () {
    Route::get('/ieltsacademic', function () {
        return view('Auth.ieltsacademic'); // create this view
    })->name('ieltsacademic');



    Route::get('/ieltsacademic', [resourceController::class, 'ieltsacademic'])->name('ielts.academic');
    Route::get('/ieltsgeneral', [resourceController::class, 'ieltsgeneral'])->name('ielts.general');
    Route::get('/ieltsukvi', [resourceController::class, 'ieltsukvi'])->name('ielts.ukvi');
    Route::get('/ieltsA1A2', [resourceController::class, 'ieltsa1a2'])->name('ielts.a1a2');
    Route::get('/general', [resourceController::class, 'general'])->name('general');
    Route::get('/english', [resourceController::class, 'english'])->name('english');
});


Route::middleware('auth')->group(function () {
    Route::get('/ieltsukvi', function () {
        return view('Auth.ieltsukvi'); // create this view
    })->name('uk');
});

Route::middleware('auth')->group(function () {
    Route::get('/resources', function () {
        return view('Auth.resources'); // create this view
    })->name('resources');
    Route::get('/resources', [resourceController::class, 'index'])->name('resources.index');

});



Route::middleware('auth')->group(function () {


    Route::get('/mock', function () {
        return view('Auth.mock'); // create this view
    })->name('mock');


    Route::get('/mock1', function () {
        return view('Auth.mock1'); // create this view
    })->name('mock1');


});

Route::middleware(['auth'])->group(function () {
    Route::post('/change-password', [PasswordController::class, 'update'])->name('password.change');
});

Route::middleware('auth')->group(function () {



    Route::get('/mock1', [resourceController::class, 'getacademic'])->name('mock1.get');

});

Route::get('/gallery', function () {
    return view('gallery');
});



Route::post('/register', [RegisterController::class, 'register'])->name('register');


//newsletterSubscriber

Route::get('/subscribe', action: [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');





Route::get('/', function () {
    return view('welcome');
});
Route::get('/', action: [resourceController::class, 'gettesti'])->name('testi.get');


Route::resource('blogposts', BlogPostController::class)->only([
    'index',
    'create',
    'store'
]);

// Either use the resource route (recommended)
Route::resource('blogposts', BlogPostController::class)->only(['create', 'store']);

// OR explicitly define the create route
Route::get('/blogposts/create', [BlogPostController::class, 'create'])->name('blogposts.create');


Route::get('/blog/create', [blogPostController::class, 'create'])->name('blog.create');


Route::get('/blogs', [blogController::class, 'index']);



//blogss
Route::get('/blogs/{id}', [blogController::class, 'show'])->name('blogs.show');

Route::get('/blogPost', function () {
    return view('blogPost');
});















Route::get('/gallery', [mediaController::class, 'media'])->name('gallery.media');
Route::post('/media/upload', [mediaController::class, 'store'])->name('media.store');


Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
Route::get('/termofservices', function () {
    return view('termofservices');
});


Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/500', function () {
    return view('errors.500');
});

Route::get('/403', function () {
    return view('errors.403');
});

Route::get('/419', function () {
    return view('errors.419');
});










//Admin login/logout section

// Public admin routes (login/logout)
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Protected admin routes
Route::middleware('admin')->group(function () {

    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Blog Posting Section
    Route::post('/admin/blogPosting', [blogPostingController::class, 'store'])->name('blog.store');
    Route::get('/admin/blogPosting', [blogPostingController::class, 'get'])->name('blog.get');


    // Delete a Blog Post
    Route::delete('/posts/{id}', [blogPostingController::class, 'destroy'])->name('posts.destroy');

    //Resource Posting Section
    Route::get('/admin/resourcePosting', [resourcePostingController::class, 'index'])->name('resources.index');
    Route::post('/admin/resourcePosting', [resourcePostingController::class, 'store'])->name('resources.store');

    //Delete a Resource
    Route::delete('/resources/{id}', [resourcePostingController::class, 'destroy'])->name('resources.destroy');

    //Gallery Posting Section
    Route::get('/admin/galleryPosting', [galleryPostingController::class, 'media'])->name('');
    Route::post('/admin/galleryPosting', [galleryPostingController::class, 'store'])->name('gallery .store');

    //Delete a Resource
    Route::delete('/galleryPosting/{id}', [galleryPostingController::class, 'destroy'])->name('gallery.destroy');


    //Teams Uploading
    Route::get('/admin/tem', [teamsPostingController::class, 'get'])->name('team.get');
    Route::post('/admin/tem', [teamsPostingController::class, 'store'])->name('team.store');

    //Teams delete
    Route::delete('/tem/{id}', [teamsPostingController::class, 'destroy'])->name('team.destroy');


    //Testemonials Uploading
    Route::get('/admin/testemonials', [testemonialsPostingController::class, 'index'])->name('testimonials.get');
    Route::post('/admin/testemonials', [testemonialsPostingController::class, 'store'])->name('testimonials.store');


    //Testemonials Delte
    Route::delete('/testimonials/{id}', [testemonialsPostingController::class, 'destroy'])->name('testimonial.destroy');


    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::put('/admin/update-password', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');

    Route::post('/admin/update-profile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');

  

    Route::delete('/gallery/{id}', [galleryPostingController::class, 'destroy'])->name('gallery.destroy');

    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');


    Route::get('/admin/mock', function () {
        return view('admin.upload-mock');
    });

    Route::get('/admin/upload-mock', [MockTestController::class, 'uploadForm'])->name('mock.upload');
    Route::post('/admin/upload-mock', [MockTestController::class, 'uploadExcel'])->name('mock.uploadExcel');

    Route::get('/admin/mock', [MockTestController::class, 'index'])->name('admin.mockget');

    Route::delete('/adminmock/{id}', [MockTestController::class, 'deleteqn'])->name('mock.destroy');


});

