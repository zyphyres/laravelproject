<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class UserController extends Controller
{
    public function login()
    {
        if (View::exists('account.login')) {
            return view('account.login');
        } else {
            return abort(404);
        }
    }
    public function process(Request $request)
    {
        $val = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $val['password'] = md5($val['password']);

        $user = User::where('email', $val['email'])->first();

        if ($user) {
            if ($val['password'] === $user->password) {
                auth()->login($user);
                return redirect()->route('home')->with('Message', 'Login successfully');
            } else {
                return redirect()->back()->with(['Error' => 'Password not match!'])->withInput();
            }
        }

        return redirect()->back()->with(['Error' => 'User not found, Please sign up first!'])->withInput();
    }

    public function register()
    {
        if (View::exists('account.register')) {
            return view('account.register');
        } else {
            return redirect()->route('login');
        }
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'cpassword' => 'required|min:6|same:password',
        ]);
        $validated['password'] = md5($validated['password']);
        $user = User::create($validated);
        if ($user) {
            auth()->login($user);
            return redirect()->route('home')->with('Message', 'Registration successfully');
        } else {
            return back()->withErrors(['email' => 'Your account you`ve been input has not found in our system. Please sign up first!.'])->onlyInput('email');
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('Message', 'Logout successfully');
    }
    public function welhome()
    {
        
        return view('user/wel');
    }
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('user/profile', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->hasAny(['name', 'email', 'birthday', 'address', 'city', 'country', 'phone', 'ccode', 'gender'])) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->birthday = $request->input('birthday');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            $user->phone = $request->input('phone');
            $user->ccode = $request->input('ccode');
            $user->gender = $request->input('gender');
            $user->update();
            return back()->with('Message', 'Updated successfully');
        } else {
            return back()->with('Error', 'Please provide at least one field to update');
        }
    }
    public function upload(Request $request, $id)
    {

        $user = User::find($id);

        if ($request->hasFile('avatar')) 
        {
            $file = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('images'), $file);
            $user->avatar = $file;
            $user->update();
            return back()->with('Message', 'Updated successfully');
        } else {
            return back()->with('Error', 'Please upload a file');
        }
    }
}
