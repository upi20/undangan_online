<?php

use Illuminate\Http\Request;
// ====================================================================================================================

use App\Http\Controllers\Admin\Pendaftaran\GFormController;

// ====================================================================================================================
// utility ============================================================================================================
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Controller =========================================================================================================
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LoaderController;

// ====================================================================================================================
// Frontend ===========================================================================================================
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\MemberController;
use App\Http\Controllers\Frontend\GaleriController as GaleriControllerFrontend;
use App\Http\Controllers\Frontend\ArtikelController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\Undangan\DisplayController;

Route::get('/session/buat', [TesController::class, 'buatSession']);
Route::get('/session/tampil', [TesController::class, 'tampilkanSession']);
Route::get('/session/hapus', [TesController::class, 'hapusSession']);

// ====================================================================================================================
// ====================================================================================================================

// auth ===============================================================================================================
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name("login");
    Route::post('/login', 'check_login')->name("login.check_login");
    Route::get('/logout', 'logout')->name("login.logout");
});
// ====================================================================================================================

// home default =======================================================================================================
Route::get('/', function (Request $request) {
    // menyimpan data session
    // session(['key' => 'value']);
    // $request->session()->put('nama', 'Diki Alfarabi Hadi');
    // mengambil data session pada key
    // $value = session('nama');

    // dd(1 * (60 * 24 * 365));
    // // mengambil data dengan default value
    // $value = session('key', 'default');

    $nama_tamu = $request->to;
    return view('undangan.ulfa', compact('nama_tamu'));
})->name('undangan');

// artikel ============================================================================================================
$prefix = 'artikel';
Route::controller(ArtikelController::class)->prefix($prefix)->group(function () use ($prefix) {
    Route::get('/', 'index')->name($prefix);
    Route::get('/{model:slug}', 'detail')->name("$prefix.detail");
});
// ====================================================================================================================



// Kontak =============================================================================================================
$name = 'kontak';
Route::controller(KontakController::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
    Route::post('/send', 'insert')->name("$name.send");
    Route::get('/faq', 'faq')->name("$name.faq");
});
// ====================================================================================================================


// Galeri =============================================================================================================
$name = 'galeri';
Route::controller(GaleriControllerFrontend::class)->prefix($name)->group(function () use ($name) {
    Route::get('/', 'index')->name($name);
    Route::get('/detail/{model:slug}', 'detail')->name("$name.detail");
});
// ====================================================================================================================




// dashboard ==========================================================================================================
Route::get('/dashboard', function () {
    if (!auth()->user()) return Redirect::route('login');
    if (auth_has_role(config('app.super_admin_role'))) {
        return Redirect::route('admin.dashboard');
    } else {
        return Redirect::route('member.dashboard');
    }
})->name("dashboard");
// ====================================================================================================================

// Utility ============================================================================================================
$prefix = 'loader';
Route::controller(LoaderController::class)->prefix($prefix)->group(function () {
    Route::prefix('js')->group(function () {
        Route::get('/{file}.js', 'js')->name("load_js");
        Route::get('/{f}/{file}.js', 'js_f')->name("load_js_a");
        Route::get('/{f}/{f_a}/{file}.js', 'js_a')->name("load_js_b");
        Route::get('/{f}/{f_a}/{f_b}/{file}.js', 'js_b')->name("load_js_b");
        Route::get('/{f}/{f_a}/{f_b}/{f_c}/{file}.js', 'js_c')->name("load_js_c");
        Route::get('/{f}/{f_a}/{f_b}/{f_c}/{f_d}/{file}.js', 'js_d')->name("load_js_d");
    });
});
// ====================================================================================================================




// laboartorium =======================================================================================================
$prefix = 'lab';
Route::controller(LabController::class)->prefix($prefix)->group(function () {
    Route::get('/phpspreadsheet', 'phpspreadsheet')->name("lab.phpspreadsheet");
    Route::get('/javascript', 'javascript')->name("lab.javascript");
    Route::get('/jstes', 'jstes')->name("lab.jstes");
});
// ====================================================================================================================


// frontend ==========================================================================================================
Route::get('/frontend', [HomeController::class, 'fronted2'])->name('frontend');
Route::get('/ulfa', function (Request $request) {
    $nama_tamu = $request->to;
    return view('undangan.ulfa', compact('nama_tamu'));
})->name('undangan');


// profile username ===================================================================================================
Route::get('/{model:url}', [DisplayController::class, 'display'])->name("display");

// Gform
Route::get('/f/{model:slug}', [GFormController::class, 'frontend_detail'])->name("frontend.gform.detail");
