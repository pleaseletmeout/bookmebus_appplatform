<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\scheduleController;
use App\Http\Controllers\ticketController;

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
    return view('home');
})->name('home');


Route::get('/login', [loginController::class,'show_login_form'])->name('login');
Route::post('/login', [loginController::class,'process_login'])->name('login');
Route::get('/signup', [loginController::class,'show_signup_form'])->name('signup');
Route::post('/signup', [loginController::class,'process_signup']);
Route::post('/logout', [loginController::class,'logout'])->name('logout');

Route::group(["middleware"=>["auth"]], function(){

    //user start
    Route::get('user/profile', [dashboardController::class, 'show_profile']);
    // Route::get('user/bookedHistory', [dashboardController::class, 'show_booked_list']); 
    Route::put('user/updateProfile/{id}', [dashboardController::class, 'update_profile']);
    //user end

    //schedule start
    Route::get('/schedule', 
        [scheduleController::class, 'show_schedule']
    );
    Route::get('/searchSchedule', 
        [scheduleController::class, 'search_schedule']
    );
    
    //schedule end

    //ticket start
    Route::post('/addTicket', 
        [ticketController::class, 'add_ticket']
    );
    Route::get('user/bookedHistory/{id}', 
        [ticketController::class, 'show_ticket']
    );
    //ticket end
});

?>