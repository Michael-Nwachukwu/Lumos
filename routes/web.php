<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Psr7\Request;

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



Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class, 'dashboard')->group(function () {
        // =========================================== student dash activities ===================================
        Route::prefix('/student-dashboard')->group(function () {
            Route::get('/', 'studentindex');
            Route::get('/syllabus', 'studentsyllabus');
            Route::get('/homework', 'studenthomework');
            Route::get('/examroutine', 'studentexamroutine');
            Route::get('/examresult', 'studentexamresult');
            Route::get('/inbox', 'studentinbox');
            Route::get('/event', 'studentevent');
        });
        
        // =========================================== teacher routes ================================================
        Route::prefix('/teacher-dashboard')->group(function () {
            Route::get('/', 'teacherindex');
            Route::get('/syllabus', 'teachersyllabus');
            Route::get('/homework', 'teacherhomework');
            Route::get('/examroutine', 'teacherexamroutine');
            Route::get('/examresult', 'teacherexamresult');
            Route::get('/inbox', 'teacherinbox');
            Route::get('/event', 'teacherevent');
            Route::get('/attendance', 'teacherattendance');
        });
        
        // ============================================= admin routes ================================================
        Route::prefix('/admin-dashboard')->group(function () {
            Route::get('/', 'adminindex');
            Route::get('/syllabus', 'adminsyllabus');
            Route::get('/homework', 'adminhomework');
            Route::get('/examroutine', 'adminexamroutine');
            Route::get('/examresult', 'adminexamresult');
            Route::get('/inbox', 'admininbox');
            Route::get('/event', 'adminevent');
            Route::get('/message', 'adminmessage');
            Route::get('/students', 'adminstudents');
            Route::get('/teachers', 'adminteachers');
            Route::get('/course', 'admincourse');

        });
    });
});



// =================================== Course routes ==============================================

Route::controller(CourseController::class)->group(function () {

    // show index page
    Route::get('/', [CourseController::class, 'index']);

    // single course
    Route::get('/courses/{course}', [CourseController::class, 'show']);

    // show all courses
    Route::get('/courses', [CourseController::class, 'all']);

    // store create course form data
    Route::post('/create', [CourseController::class, 'store']);

    // Store create syllabus by teachers 
    Route::post('/createsyllabus', [CourseController::class, 'storeSyllabus']);

    // Eit/update syllabus
    Route::put('/syllabus/{syllable}', [CourseController::class, 'updateSyllabus'])->name('syllabus.update');

    // delete syllabus
    Route::delete('/syllabus/{syllable}', [CourseController::class, 'destroySyllabus'])->name('syllabus.destroy');

    // Store create Homeworks by teachers
    Route::post('/createHomework', [CourseController::class, 'storeHomework']);

    // download homework pdf instructions
    Route::get('/download/{id}', [CourseController::class, 'download'])->name('homework.download');

    // Eit/update homeworks
    Route::put('/homeworks/{homework}', [CourseController::class, 'updateHomework'])->name('homework.update')->middleware('auth');

    // delete tasks/homeworks
    Route::delete('/homeworks/{homework}', [CourseController::class, 'destroyHomework'])->middleware('auth')->name('homeworks.destroy');


});

// ================================ users routes =====================================================

Route::controller(UserController::class)->group(function () {
    
    // show register page
    Route::get('/register', [UserController::class, 'create']);

    // store users details
    Route::post('/users', [UserController::class, 'store']);

    // show login form 
    Route::get('/login', [UserController::class, 'login'])->name('login');

    // log in user
    Route::post('/users/authenticate', [UserController::class, 'authenticate']);

    // log user out
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');

    // create a teacher by admin
    Route::post('/create/teacher', [UserController::class, 'storeTeacher']);

});

// ============================== Payment Routes =====================================================

// i was using a post method before i switched to a get cos of the error in finding if a user is enrolled
Route::get('/payment', [PaymentController::class, 'payment'])->name('flutterwave.payment');

Route::get('donate/callback', [PaymentController::class, 'donate_callback'] )->name('flutterwave-callback');








