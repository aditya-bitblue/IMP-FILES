<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactusController;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\checkadmin;
use GuzzleHttp\Middleware;

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


// cache

// function debug_to_console($data)
// {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }

Route::get('/', function () {

    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('view:clear');
    // Artisan::call('route:clear');
    // Artisan::call('route:cache');
    $ans = Artisan::call('optimize:clear');
    if ($ans == 0) {
        // echo "Cache cleared";
        return view('welcome');
    } else {
        echo "Cache not cleared";
    }
    // sleep(10);




});

Route::get('/aboutus', function () {
    return view('./about/aboutus');
});
Route::get('/teacherswithqualification', function () {
    return view('./about/teacherswithqualification');
});
Route::get('/calendar', function () {
    return view('./academics/calendar');
});
Route::get('/program', function () {
    return view('./academics/program');
});
Route::get('/activities', function () {
    return view('./academics/activities');
});
Route::get('/holidays', function () {
    return view('./academics/holidays');
});
Route::get('/hygiene', function () {
    return view('./infrastructure/hygiene');
});
Route::get('/lab', function () {
    return view('./infrastructure/laboratories');
});
Route::get('/library', function () {
    return view('./infrastructure/library');
});
Route::get('/playground', function () {
    return view('./infrastructure/playground');
});
Route::get('/staff', function () {
    return view('./infrastructure/staff');
});


Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/parentsinvolvement', function () {
    return view('parentsinvolvement');
});
Route::get('/studentpanel', function () {
    return view('studentpanel');
});


// ENQUIRY
Route::get('/online-admission', function () {
    return view('./enquiry/onlineadmission');
});
Route::get('/admission-rules', function () {
    return view('./enquiry/admissionrules');
});
Route::get('/contactus', function () {
    return view('./enquiry/contactus');
});
Route::get('/certificate', function () {
    return view('./enquiry/certificate');
});
Route::get('/career', function () {
    return view('./enquiry/career');
});


// login && Register


Route::get('/login', function () {
    // Artisan::call('config:cache');
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/check', function () {
    return view('check');
});


//AUTH 
Route::post('user_register', [UsersController::class, 'register']);
Route::post('user_login', [UsersController::class, 'login']);

Route::get('logout', function () {
    session()->flush();
    return view('welcome');
});

//career
Route::post('career_submit', [CareerController::class, 'store']);


//contact-us
Route::post('contactform', [ContactusController::class, 'store']);


//admin


Route::middleware(['checkAdmin'])->group(function () {
    Route::get('dashboard', function () {
        return view('./admin/dashboard');
    });
});
