<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SOPController;
use App\Http\Controllers\SPMController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubMateriController;

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
//     return view('layout.main');
// });
Route::get('/', function () {
    return view('part.beranda');
});
Route::get('/kebijakan', function () {
    return view('part.kebijakan');
});
Route::get('/sopm', function () {
    return view('part.sopm');
});
Route::get('/pelatihan', function () {
    return view('part.pelatihan');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/register', function () {
    return view('part.register');
});
Route::middleware(['auth:web', 'PreventBack', 'user'])->group(function(){
    Route::get('/home', function () {
        return view('user.home');
    });
    Route::get('/materi', function () {
        return view('user.materi');
    });
    Route::get('/kuisioner', function () {
        return view('user.kuisioner');
    });
    Route::get('/nilai', function () {
        return view('user.nilai');
    });
    Route::get('/user-dashboard', function () {
        return view('user.dashboard');
    });
});
Route::middleware(['auth:web', 'PreventBack', 'admin'])->group(function(){
    Route::resource('/sop', SOPController::class);
    Route::resource('/spm', SPMController::class);
    Route::resource('/course', CourseController::class);
    Route::resource('/sub-materi', SubMateriController::class);

    Route::get('/list-unverif', function(){
        return view('admin.sismamedikal.listunverif');
    })->name('list-unverif');
    
    Route::get('/list-verif', function(){
        return view('admin.sismamedikal.listverif');
    })->name('list-verif');
    
    Route::get('/LOTC', function(){
        return view('admin.sismamedikal.lotc');
    })->name('LOTC');
    
    Route::get('/LPT', function(){
        return view('admin.sismamedikal.lpt');
    })->name('LPT');
    
    Route::get('/certificate', function(){
        return view('admin.sismamedikal.certificate');
    })->name('certificate');
});
