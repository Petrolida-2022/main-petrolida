<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BccController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\FfdcController;
use App\Http\Controllers\OrdcController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\PetrosmartController;
use App\Http\Controllers\StcController;
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

Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authentication']);
Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    // ORDC Controller
    Route::prefix('ordc')->group(function () {
        Route::get('/team', [OrdcController::class, 'team']);
        Route::get('/leader', [OrdcController::class, 'leader']);
        Route::get('/members', [OrdcController::class, 'members']);
        Route::get('{ord_competition}', [OrdcController::class, 'show']);
    });

    // FFDC Controller
    Route::prefix('ffdc')->group(function () {
        Route::get('/team', [FfdcController::class, 'team']);
        Route::get('/leader', [FfdcController::class, 'leader']);
        Route::get('/members', [FfdcController::class, 'members']);
        Route::get('{ffd_competition}', [FfdcController::class, 'show']);
    });

    // Petrosmart Controller
    Route::prefix('petrosmart')->group(function () {
        Route::get('/team', [PetrosmartController::class, 'team']);
        Route::get('/leader', [PetrosmartController::class, 'leader']);
        Route::get('/members', [PetrosmartController::class, 'members']);
        Route::get('{petrosmart_competition}', [PetrosmartController::class, 'show']);
    });

    // Paper Controller
    Route::prefix('paper')->group(function () {
        Route::get('/team', [PaperController::class, 'team']);
        Route::get('/leader', [PaperController::class, 'leader']);
        Route::get('/members', [PaperController::class, 'members']);
        Route::get('{paper_competition}', [PaperController::class, 'show']);
    });

    // STC Controller
    Route::prefix('stc')->group(function () {
        Route::get('/team', [StcController::class, 'team']);
        Route::get('/leader', [StcController::class, 'leader']);
        Route::get('/members', [StcController::class, 'members']);
        Route::get('{stock_competition}', [StcController::class, 'show']);
    });

    // BCC Controller
    Route::prefix('bcc')->group(function () {
        Route::get('/team', [BccController::class, 'team']);
        Route::get('/leader', [BccController::class, 'leader']);
        Route::get('/members', [BccController::class, 'members']);
        Route::get('{business_competition}', [BccController::class, 'show']);
    });

    // CS Controller
    Route::prefix('cs')->group(function () {
        Route::get('/team', [CsController::class, 'team']);
        Route::get('/leader', [CsController::class, 'leader']);
        Route::get('/members', [CsController::class, 'members']);
        Route::get('{case_competition}', [CsController::class, 'show']);
    });
});
