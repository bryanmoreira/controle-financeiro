<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email' => 'Insira um e-mail válido',
            'password' => 'Insira uma senha válida'
        ]);

        $credencials = $request->only('email', 'password');

        $authenticated = Auth::attempt($credencials);

        if(!$authenticated) {
            return redirect()->route('login.index')->withErrors(['error' => 'E-mail ou senha inválidos.']);
        }

        return redirect()->route('dashboard.index');
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login.index');
    }
}
