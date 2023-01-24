<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

class loginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('user.login');
    }

    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect('/');

        }else{

            session()->flash('message', 'Wrongly input email or password.');
            return redirect()->back();
        }

    }

    public function show_signup_form()
    {
        return view('user.signup');
    }

    public function process_signup(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        try{
            User::create([
                'name' => trim($request->input('name')),
                'email' => strtolower($request->input('email')),
                'password' => bcrypt($request->input('password')),
                'phone_num' => trim($request->input('phone_num')),
                'address' => trim($request->input('address')),
            ]);

            session()->flash('message', 'Your account is created. Let login');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration is getting problem');

        }

        return redirect()->route('login');

    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('home');
        

    }

    public function update_profile($id){
        $user = User::find($id);
        $user->name = $request->input('update_name');
        $user->phone_num = $request->input('update_phone');
        $user->email = $request->input('update_email');
        $user->address = $request->input('update_address');

        $operator->update();

        return redirect('user/profile')->with('status', 'Profile has been updated!!!');
    }

    
}
