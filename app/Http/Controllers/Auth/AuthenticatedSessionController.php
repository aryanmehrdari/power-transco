<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     */
    public function create($request): View
    {

        return view('auth.login',['request'=>$request]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */

    public function store(LoginRequest $request): RedirectResponse
    {

        try {
            $request->authenticate();

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                setcookie('email',$request->email,time()+86400,'/login');
                setcookie('password',$request->password,time()+86400,'/login');
                setcookie('remember',$request->remember,time()+86400,'/login');
            }

        } catch (ValidationException $e) {
            $request->session()->regenerate();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->back()->withErrors(['ایمیل یا رمزعبور اشتباه است.']);
        }

        if($request->user()['is_admin']!==0){
            Auth::guard('web')->logout();
            $request->session()->regenerate();
            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->back();
        }
        return redirect()->intended(RouteServiceProvider::HOME);

    }

    /**
     * Destroy an authenticated session.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
