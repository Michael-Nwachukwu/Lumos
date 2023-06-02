<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect('/courses')->with('success', 'User created and logged in');

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
            return back()->with('success', 'Tutor created successfully');
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
                return redirect('/student-dashboard')->with('success', 'Student logged in Successfully');
            }

            if ($role == '1') {
                // Teacher::create($formFields);
                // redirect
                return redirect('/teacher-dashboard')->with('success', 'Teacher logged in Successfully');
            }

            if ($role == '2') {
                // redirect
                return redirect('/admin-dashboard')->with('success', 'Admin logged in Successfully');
            }
        }

        // else if the attempt fails take user back to the login page with errors. this is because we want the error to only show in the email input cos we do not want the user to know if the user exists or not
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function changePassword(Request $request)
    {
        // dd(Auth::user());

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = Auth::user();
        // dd($user);


        // Check if the current password matches the user's password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'The current password is incorrect.');
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->password_changed_at = Carbon::now();
        $user->save();

        return redirect('/student-dashboard')->with('success', 'Password changed successfully.');
    }

    // logout user
    public function logout(Request $request)
    {
        // logout
        auth()->logout();

        // invalidate user session and invalidate their csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out');
    }

    // 
}
