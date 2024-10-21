<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::pattern('id', '[0-9]+');

// Tugas Register
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'postRegister']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);

    // route user
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', [UserController::class, 'index']);  
            Route::post('/list', [UserController::class, 'list']);      
            Route::get('/create', [UserController::class, 'create']);   
            Route::post('/', [UserController::class, 'store']);         
            Route::get('/create_ajax', [UserController::class, 'create_ajax']); 
            Route::post('/ajax', [UserController::class, 'store_ajax']); 
            Route::get('/{id}', [UserController::class, 'show']);       
            Route::get('/{id}/edit', [UserController::class, 'edit']);  
            Route::put('/{id}', [UserController::class, 'update']);     
            Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);  
            Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);     
            Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); 
            Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); 
            Route::delete('/{id}', [UserController::class, 'destroy']); 
        });
    });

    // route level
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/level', [LevelController::class, 'index']);          
        Route::post('/level/list', [LevelController::class, 'list']);      
        Route::get('/level/create', [LevelController::class, 'create']);   
        Route::post('/level', [LevelController::class,'store']);          
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']); 
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']); 
        Route::get('/level/{id}', [LevelController::class, 'show']);       
        Route::get('/level/{id}/show_ajax', [LevelController::class, 'show_ajax']); 
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']);  
        Route::put('/level/{id}', [LevelController::class, 'update']);     
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); 
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']); 
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']); 
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']); 
        Route::delete('/level/{id}', [LevelController::class, 'destroy']); 
    });

    // route kategori
    Route::middleware(['authorize:ADM,MNG'])->group(function(){
        Route::group(['prefix' =>'kategori'],function(){
            Route::get('/', [kategoriController::class, 'index']);          
            Route::post('/list', [kategoriController::class, 'list']);      
            Route::get('/create', [kategoriController::class, 'create']);   
            Route::post('/', [kategoriController::class,'store']);          
            Route::get('/create_ajax', [kategoriController::class, 'create_ajax']); 
            Route::post('/ajax', [kategoriController::class, 'store_ajax']); 
            Route::get('/{id}', [kategoriController::class, 'show']);       
            Route::get('/{id}/show_ajax', [kategoriController::class, 'show_ajax']);
            Route::get('/{id}/edit', [kategoriController::class, 'edit']);  
            Route::put('/{id}', [kategoriController::class, 'update']);     
            Route::get('/{id}/edit_ajax', [kategoriController::class, 'edit_ajax']); 
            Route::put('/{id}/update_ajax', [kategoriController::class, 'update_ajax']); 
            Route::get('/{id}/delete_ajax', [kategoriController::class, 'confirm_ajax']); 
            Route::delete('/{id}/delete_ajax', [kategoriController::class, 'delete_ajax']); 
            Route::delete('/{id}', [kategoriController::class, 'destroy']); 
        });
    });

    // route barang
 // route barang
Route::middleware(['authorize:ADM,MNG'])->group(function(){
    Route::get('/barang', [BarangController::class, 'index']);          
    Route::post('/barang/list', [BarangController::class, 'list']);      
    Route::get('/barang/create', [BarangController::class, 'create']);   
    Route::post('/barang', [BarangController::class,'store']);          
    Route::get('/barang/create_ajax', [BarangController::class, 'create_ajax']); 
    Route::post('/barang/ajax', [BarangController::class, 'store_ajax']); 
    Route::get('/barang/{id}', [BarangController::class, 'show']);       
    Route::get('/barang/{id}/show_ajax', [BarangController::class, 'show_ajax']);
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);  
    Route::put('/barang/{id}', [BarangController::class, 'update']);     
    Route::get('/barang/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); 
    Route::put('/barang/{id}/update_ajax', [BarangController::class, 'update_ajax']); 
    Route::get('/barang/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']); 
    Route::delete('/barang/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); 
    Route::delete('/barang/{id}', [BarangController::class, 'destroy']); 
    Route::get('/barang/import', [BarangController::class, 'import']);
    Route::post('/barang/import_ajax', [BarangController::class, 'import_ajax']);
    Route::get('/barang/export_excel', [BarangController::class, 'export_excel']);
});


    // route supplier
    Route::middleware(['authorize:ADM,MNG'])->group(function(){
        Route::group(['prefix' =>'supplier'],function(){
            Route::get('/', [SupplierController::class, 'index']);          
            Route::post('/list', [SupplierController::class, 'list']);      
            Route::get('/create', [SupplierController::class, 'create']);   
            Route::post('/', [SupplierController::class,'store']);          
            Route::get('/create_ajax', [SupplierController::class, 'create_ajax']); 
            Route::post('/ajax', [SupplierController::class, 'store_ajax']); 
            Route::get('/{id}', [SupplierController::class, 'show']);       
            Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
            Route::get('/{id}/edit', [SupplierController::class, 'edit']);  
            Route::put('/{id}', [SupplierController::class, 'update']);     
            Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']); 
            Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']); 
            Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']); 
            Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']); 
            Route::delete('/{id}', [SupplierController::class, 'destroy']); 
        });
    }); 
});
