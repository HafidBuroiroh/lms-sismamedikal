<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SOPController;
use App\Http\Controllers\SPMController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\SubMateriController;
use App\Http\Controllers\MateriUmumController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\RumahSakitController;

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
Route::get('/sopm', function () {
    return view('part.sopm');
});
Route::get('/pelatihan',[FrontController::class, 'pelatihan']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/suadmin/login', [LoginController::class, 'suadminlogin'])->name('suadminlogin');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::middleware(['auth:web', 'PreventBack', 'user'])->group(function(){
    Route::get('/home',[FrontController::class, 'home']);
    Route::get('/materi-sop/{id}',[FrontController::class, 'materisop']);
    Route::get('/materi-spm/{id}',[FrontController::class, 'materispm']);
    Route::get('/materi-course/{id}',[FrontController::class, 'matericourse']);
    Route::get('/materi-umum/{id}',[FrontController::class, 'materiumum']);
    Route::get('/submateri/{id}',[FrontController::class, 'submateri'])->name('user.submateri');
    Route::get('/kuisioner/pertanyaan/{id}',[FrontController::class, 'kuisioner'])->name('kusioner.pertanyaan');
    Route::post('/kuisioner/pertanyaan/{id}/store',[FrontController::class, 'kuisionerStore'])->name('kusioner.pertanyaan.store');
    Route::post('/kuisionerpost',[FrontController::class, 'kuisionerpost']);
    
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
    Route::get('/sub-materi/pertanyaan/{id}', [SubMateriController::class, 'pertanyaan'])->name('sub-materi.pertanyaan');
    Route::get('/sub-materi/pertanyaan/{id}/create', [SubMateriController::class, 'pertanyaanCreate'])->name('sub-materi.pertanyaan.create');
    Route::post('/sub-materi/pertanyaan/{id}/store', [SubMateriController::class, 'pertanyaanStore'])->name('sub-materi.pertanyaan.store');
    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/materi-umum', MateriUmumController::class);
    Route::resource('/pertanyaan', PertanyaanController::class);
    Route::resource('/list-pelatihan', PelatihanController::class);

    Route::get('/list-unverif', [UserController::class, 'unverif'])->name('list-unverif');
    Route::post('/verif-user/{id}', [UserController::class, 'verifuser'])->name('verif-user');
    Route::get('/list-verif', [UserController::class, 'verif'])->name('list-verif');
    
    
    
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


Route::middleware(['auth:web', 'PreventBack', 'suadmin'])->group(function(){
    // Route::get('/list-rs', function(){
    //     return view('suadmin.listrs');
    // })->name('list-rs');
    // Route::get('/kebijakan', function(){
    //     return view('suadmin.kebijakan');
    // })->name('kebijakan');
    
    Route::resource('/rs', RumahSakitController::class);
    Route::resource('/kebijakan', KebijakanController::class);
});

Route::get('/export-template', [PertanyaanController::class, 'exportTemplate']);
Route::post('/import-pertanyaan', [PertanyaanController::class, 'importpertanyaan'])->name('importpertanyaan');
