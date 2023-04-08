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
            return redirect('/');
        }
        elseif ($user->role == 1) {
            # code...
            Auth::login($user);
            return redirect('mypatient');
        }
        } else {
            return redirect('login');
        }




        // if ($user->role == 0) {
        //     Auth::login($user);
        //     return redirect('/');
        // }
        // elseif ($user->role == 1) {
        //     # code...
        //     Auth::login($user);
        //     return redirect('mypatient');
        // }
        // elseif ($user == 'null')  {
        //     return redirect('login');
        // }
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

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
