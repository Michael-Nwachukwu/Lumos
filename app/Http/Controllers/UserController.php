<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // show register/create form
    public function create()
    {
        return view('register');
    }

    // create and store user
    public function store(Request $request)
    {
        // dd(request());

        $formFields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'gender' => 'required',
            'phone' => ['required', 'min:3'],
            'password' => 'required|confirmed|min:6'
        ]);

        if ($request->hasFile('profilepicture')) {
            $formFields['profilepicture'] = $request->file('profilepicture')->store('profilepictures', 'public');
        }

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // log in
        auth()->login($user);

        // redirect
        return redirect('/courses')->with('message', 'User created and logged in');

    }

    // create and store teacher by admin
    public function storeTeacher(Request $request)
    {

        // dd(request());

        $formFields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'gender' => 'required',
            'role' => 'required',
            'phone' => ['required', 'min:3'],
            'password' => 'required|confirmed|min:6'
        ]);


        if ($request->hasFile('profilepicture')) {
            $formFields['profilepicture'] = $request->file('profilepicture')->store('profilepictures', 'public');
        }

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // Teacher::create($formFields);

        if ($user) {
            return back()->with('message', 'User created and logged in');
        } else {

            // if not then
            return back()->withErrors(['User not created']);
        }
    }


    // show login form
    public function login()
    {
        return view('login');
    }

    // login user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            // if thats true we want to regenerate a session id
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role == '0') {
                // redirect
                return redirect('/')->with('message', 'Student logged in Successfully');
            }

            if ($role == '1') {
                // Teacher::create($formFields);
                // redirect
                return redirect('/teacher-dashboard')->with('message', 'Teacher logged in Successfully');
            }

            if ($role == '2') {
                // redirect
                return redirect('/admin-dashboard')->with('message', 'Admin logged in Successfully');
            }
        }

        // else if the attempt fails take user back to the login page with errors. this is because we want the error to only show in the email input cos we do not want the user to know if the user exists or not
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // logout user
    public function logout(Request $request)
    {
        // logout
        auth()->logout();

        // invalidate user session and invalidate their csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you have been logged out');
    }

    // 
}
