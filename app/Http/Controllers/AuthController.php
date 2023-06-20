<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorLoginRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(LoginRequest $request)
    {


        $phone = $request->phone;
        $national_id = $request->national_id;
        $user = user::where('phone', $phone)->where('national_id', $national_id)->first();
        if($user) {
        if ($user->role == 0) {
            Auth::login($user);
            return redirect('patientadmin');
        }
        elseif ($user->role == 1) {
            # code...
            Auth::login($user);
            return redirect(url('DoctorAdmin/appointment'));
        }
        elseif ($user->role == 2) {
            # code...
            Auth::login($user);
            return redirect('department');
        }
        elseif ($user->role == 3) {
            # code...
            Auth::login($user);
            return redirect('pharmacy');
        }
        elseif ($user->role == 4) {
            # code...
            Auth::login($user);
            return redirect('lab');
        }
        } else {
            return redirect()->back()->with('error','user not found');

        }





    }
    public function view()
    {
        # code...
        return view('auth.loginDoctor');
    }






    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(StoreUserRequest $request)
    {
        $image = $request->image;
        if ($image) {
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            User::create([
                "image" => $path,
                'name' => $request->name,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'age' => $request->age,
                'national_id' => $request->national_id,
                'blood_type' => $request->blood_type,
            ]);
        }
        return redirect('/');
    }



    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function profile()
    {
        # code...
        // dd(Auth::user()->role);
        if (Auth::user()->role == 2) {
          return redirect('department');
        } else if (Auth::user()->role == 1) {
            return redirect('DoctorAdmin/appointment');
        }
         else if (Auth::user()->role == 3) {
            return redirect('pharmacy');
        }
         else if (Auth::user()->role == 4) {
            return redirect('lab');
        }
         else {
            return redirect('patientadmin');
        }

    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
