<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\applicationController;
use App\Http\Livewire\PostulacionForm;
use App\Http\Livewire\PostulacionesIndex;

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
Route::get('/index/{applicationId?}', [applicationController::class, 'index'])->name('index');
Route::get('/create/{applicationId?}', [applicationController::class, 'create'])->name('home');
Route::post('/applications-submit', [PostulacionForm::class, 'storeOrUpdate'])->name('applications-submit');
// Route::get('/applications-submit', [PostulacionForm::class, 'storeOrUpdate'])->name('applications-submit');
Route::get('/export', [applicationController::class, 'export'])->name('export');
Route::post('/import', [applicationController::class, 'import'])->name('import');
// Route::get('/restore/{id}', [PostulacionesIndex::class, 'restore'])->name('restore');
