<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    /*public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
         
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }*/
    public function store(Request $request)
    {
     $user = User::find(1);
     echo $user->password;
         $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);
    Log::info('Login attempt', ['email' => $request->email,'password' => $request->password]);
   // echo $request->password; 
    //echo $request->email."".'password';
    //return redirect()->intended('/dashboard'); 
   /* if (Auth::attempt(['email'=>$request->email, 'password' => $request->password])) {
        // Redirect the user to a custom page after login
        return redirect()->intended('/dashboard'); // or any other page
    }*/
   
    //Log::info('Failed login attempt', ['email' => $request->email]);
    //return back()->withErrors([
    //    'email' => 'The provided credentials do not match our records.',
    //]);
    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];
    
    //dd($credentials);
    if (Auth::attempt($credentials )) {
        // Authentication was successful
        return response()->json(['message' => 'Login successful'], 200);
    } else {
        // Authentication failed
        return response()->json(['message' => 'These credentials do not match our records.'], 401);
    }

}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
