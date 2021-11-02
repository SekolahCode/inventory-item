<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\LoginResponse;

class PassPhraseController extends Controller
{
    public function show()
    {
        return view('auth.passphrase');
    }

    public function store(Request $request)
    {

        if (Session::get('passphrase_expiry') < now()->timestamp ){
            Auth::logout();
            $this->clearSession($request);
            return redirect()->route('login')->withErrors(['email' =>['Your Passphrase has expired. Please login again']]);
        }

        if (strToLower($request->passphrase) != Session::get('passphrase')) {
            throw ValidationException::withMessages([
                'passphrase' => ['Sorry, that is not the correct passphrase. Please check your email for the latest message.'],
            ]);
        }

        $this->clearSession($request);

        return app(LoginResponse::class);
    }

    public function clearSession($request)
    {
        $request->session()->forget('passphrase');
        $request->session()->forget('passphrase_expiry');
    }
}