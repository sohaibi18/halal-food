<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function index()
    {

        return view('login');
    }

    public function enter(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()
                ->intended('/country');
        }
        return redirect()
            ->back()
            ->withErrors([
                'email' => 'Your provided credentials do not match our record',
            ])->onlyInput('email');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);

        // return $request->all();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('main');
    }


    public function logout(Request $request)
    {


        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('logout');

    }
}
