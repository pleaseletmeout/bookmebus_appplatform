<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // include for AUTH



use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;



class dashboardController extends Controller
{
    //
    public function show_profile(){
        return view('user.profile');
    }

    public function show_booked_list(){
        return view('user.booked');
    }

    public function update_profile(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('update_name');
        $user->phone_num = $request->input('update_phone');
        $user->email = $request->input('update_email');
        $user->address = $request->input('update_address');

        $user->update();

        return redirect('user/profile')->with('status', 'Profile has been updated!!!');
    }
}
