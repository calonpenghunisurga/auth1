<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if ($request->user()->usertype === 'admin') //fungsi dari === adalah untuk membedakan user dengan admin, jika misal hanya = maka data user sama dengan datanya admin
            {
                return redirect('admin/dashboard'); // dan jika admin yang login, maka akan redirect ke admin/dashboard
            }

        return redirect()->intended(route('dashboard'));
    }

    //Contoh penerapannya dari identical

    // $x = 100;
    // $y = 100;
    // output ($x === $y) artinya data $x tidak sama dengan data $y
    //outputnya adalah false

    //Tetapi jika 

    // $x = 100;
    // $y = 100;
    // output ($x = $y) artinya data $x sama dengan data $y
    //outputnya adalah true

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
