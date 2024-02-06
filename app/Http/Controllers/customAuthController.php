<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class customAuthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->get('name'))
            return redirect('dashboard');
        else
            return view('registration');
    }

    public function login(Request $request)
    {
        if ($request->session()->get('name'))
            return redirect('dashboard');
        else
            return view('login');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        workers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tasks'=>''
        ]);

        return redirect('/');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->email;
        $worker = workers::where('email', '=', $email)->first();
        if ($worker) {
            if (Hash::check($request->password, $worker->password)) {
                $request->session()->put('name', $worker->name);
                $request->session()->put('id', $worker->id);
                return redirect('dashboard');
            } else {
                return back()->with('error', 'Invalid Login credentials. Please try again!');
            }
        } else {
            return back()->with('error', 'Invalid Email. Please try again!');
        }
    }

    public function dashboard(Request $request)
    {
        $task='';
        if ($request->session()->get('name'))
            return view('dashboard',compact('task'))->with('name', $request->session()->get('name'));
        else
            return back()->with('error', 'Please Register/Login');
    }

    public function logout(Request $request)
    {
        if ($request->session()->get('name')) {
            $request->session()->flush();
            return redirect('login')->with('error', 'You are successfully loggd out');
        }
    }
}
