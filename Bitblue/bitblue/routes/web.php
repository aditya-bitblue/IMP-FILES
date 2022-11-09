<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ServicesController;




Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/career', [HomeController::class, 'career']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/appdevelopment', [HomeController::class, 'appdevelopment']);
Route::get('/webdevelopment', [HomeController::class, 'webdevelopment']);
Route::get('/contentmarketing', [HomeController::class, 'contentmarketing']);
Route::get('/seooptimization', [HomeController::class, 'seooptimization']);
Route::get('/socialmarketing', [HomeController::class, 'socialmarketing']);
Route::get('/dextro', [HomeController::class, 'dextro']);
Route::get('/pabulum', [HomeController::class, 'pabulum']);
Route::get('/hospo', [HomeController::class, 'hospo']);
Route::get('/bithome', [HomeController::class, 'bithome']);
Route::get('/digitalmarketing', [HomeController::class, 'digitalmarketing']);
Route::get('/bitpay', [HomeController::class, 'bitpay']);

//--------------------Job Apply----------------------
Route::post('jobapply', [HomeController::class, 'jobapply']);
// Route::get('/jobapply2', [HomeController::class, 'jobapply2']);
// Route::get('/jobapply3', [HomeController::class, 'jobapply3']);


//--------------------Services---------------------
Route::get('/mobappdevelopment', [ServicesController::class, 'mobappdevelopment']);
Route::get('/webappdevelopment', [ServicesController::class, 'webappdevelopment']);
Route::get('/Softwaredevelopmentconsulting', [ServicesController::class, 'Softwaredevelopmentconsulting']);
Route::get('/ProductDesign', [ServicesController::class, 'ProductDesign']);
Route::get('/StartupDNA', [ServicesController::class, 'StartupDNA']);
Route::get('/SoftwareModernization', [ServicesController::class, 'SoftwareModernization']);
Route::get('/MachineLearningAI', [ServicesController::class, 'MachineLearningAI']);
Route::get('/DedicatedProductTeam', [ServicesController::class, 'DedicatedProductTeam']);
Route::get('/TeamAugmentation', [ServicesController::class, 'TeamAugmentation']);

//-----------------Admin Login---------------------
Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/userlogin', [CustomAuthController::class, 'loginUser'])->name('userlogin');


//-----------------Admin Dashboard---------------------
Route::get('/dashboard', [AdminHomeController::class, 'dashboard']);



//--------------------testimonial----------------
Route::get('/testimonials', [AdminHomeController::class, 'testimonial']);
Route::get('/add-testimonial', [AdminHomeController::class, 'addtestimonial']);
Route::post('upload-testimonial', [AdminHomeController::class, 'uploadtestimonial'])->name('uploadtestimonial');
Route::get('/edit-testimonial/{id}', [AdminHomeController::class, 'edittestimonial'])->name('edittestimonial');
Route::post('/update-testimonial/{id}', [AdminHomeController::class, 'updatetestimonial'])->name('updatetestimonial');
Route::get('/delete-testimonial/{id}', [AdminHomeController::class, 'deletetestimonial'])->name('deletetestimonial');


// -------------------------- Job Candidates ------------------------

Route::get('/candidates', [AdminHomeController::class, 'candidates']);
Route::get('/deletecandidate/{id}', [AdminHomeController::class, 'deletecandidate'])->name('deletecandidate');
Route::get('/deletetequery/{id}', [AdminHomeController::class, 'deletetequery'])->name('deletetequery');


//contact-us
Route::post('contactus', [HomeController::class, 'contactus']);

// contact us admin

Route::get('/deletetequery/{id}', [AdminHomeController::class, 'deletetequery'])->name('deletetequery');
Route::get('/queries', [AdminHomeController::class, 'queries']);
