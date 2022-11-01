<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExperianceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Address;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    // Route::get('/', function () {
    //     return view('master');
    // });
    
    Route::get('/home', [HomeController::class,'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class,'show'])->name('register.show');
        Route::post('/register', [RegisterController::class,'register'])->name('register');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class,'show'])->name('login.show');
        Route::post('/login', [LoginController::class,'login'])->name('login');

    });

    Route::group(['middleware' => ['auth']], function() {

    //      Route::get('/dashboard', function () {
    //     return view('master');
    // });
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class,'perform'])->name('logout');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UserController::class,'index'])->name('users.index');
            Route::get('/create', [UserController::class,'create'])->name('users.create');
            Route::post('/create', [UserController::class,'store'])->name('users.store');
            Route::get('/{user}/show', [UserController::class,'show'])->name('users.show');
            Route::get('/my_profile', [UserController::class,'my_profile'])->name('users.my_profile');
            Route::get('/{user}/edit', [UserController::class,'edit'])->name('users.edit');
            Route::get('/{user}/assign_role', [UserController::class,'assign_role'])->name('users.assign_role');
            Route::patch('/{user}/update', [UserController::class,'update'])->name('users.update');
            Route::post('/{user}/update_role', [UserController::class,'update_role'])->name('users.update_role');
            Route::delete('/{user}/delete', [UserController::class,'destroy'])->name('users.destroy');
        });

        
        /**
         * Employee Routes
         */
        Route::group(['prefix' => 'employees'], function() {
            Route::get('/', [EmployeeController::class,'index'])->name('employees.index');
            Route::get('/create', [EmployeeController::class,'create'])->name('employees.create');
            Route::post('/create', [EmployeeController::class,'store'])->name('employees.store');
            Route::get('/{employee}/show', [EmployeeController::class,'show'])->name('employees.show');
            Route::get('/{employee}/employee_profile', [EmployeeController::class,'employee_profile'])->name('employees.employee_profile');
            Route::get('/{employee}/edit', [EmployeeController::class,'edit'])->name('employees.edit');
            Route::get('/{employee}/assign_role', [EmployeeController::class,'assign_role'])->name('employees.assign_role');
            Route::patch('/{employee}/update', [EmployeeController::class,'update'])->name('employees.update');
            Route::post('/{employee}/update_role', [EmployeeController::class,'update_role'])->name('employees.update_role');
            Route::delete('/{employee}/delete', [EmployeeController::class,'destroy'])->name('employees.destroy');
        });

        /**
         * setting Routes
         */
        Route::group(['prefix' => 'setting'], function() {
            route::resource('/department',DepartmentController::class);
            route::resource('/designation',DesignationController::class);
        });

        Route::resource('roles', RoleController::class);
        Route::resource('address', AddressController::class);
        Route::resource('education', EducationController::class);
        Route::resource('experiance', ExperianceController::class);
        Route::resource('document', DocumentController::class);
        Route::resource('permissions', PermissionController::class);
    });
});