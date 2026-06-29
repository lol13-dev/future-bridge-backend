<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class AuthController extends Controller
{
    // SHOW LOGIN SCREEN.
    public function showLogin()
    {
        return view('auth.login');
    }

    // LOGIN FUNCTION.
    public function login(Request $request)
    {
        // 1. THE VIBE Check (STRICT VALIDATION)
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string', 'max:255'],
            'password' => ['required', 'string']
        ], [
            // FUNNY VALIDATION MESSAGES
            'email.required' => 'EMAILNYA MANA BOSQUE...',
            'email.email' => 'DIH, INI KAYAKNYA BUKAN EMAIL DEH, GANTI DONG WKWK...',
            'password.required' => 'HAH, PASSWORDNYA MANA BANG....'
        ]);

        // 2. THE CHECK AUTH CREDENTIALS
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate(); // PROTECTES against session function.

            // IF they have admin status, LET THEM COOK in THE DASHBOARD!
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.surveys.index');
            }

            // NORMIES go to the HOMEPAGE.
            return redirect('/');
        }

        // 3. THE REJECTIONm (IF AUTH FAILED)
        return back()->withErrors([
            'email' => 'YEUUU SI KOCAK, PASSWORD SAMA EMAILNYA SALAH WIR....'
        ])->onlyInput('email');
    }
    
    // SHOW REGISTRATION SCREEN.
    public function showRegister()
    {
        return view('auth.register');
    }

    // REGISTER FUNCTION.
    public function register(Request $request)
    {
        // STEP 1: THE VIBE Check (STRICT VALIDATION)
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            // Gen Z Custom Error Messages
            'name.required' => 'Who even are you? Drop a name, respectfully.',
            'email.required' => 'We need an email, don\'t ghost us.',
            'email.unique' => 'Bro this email is already taken. Stop being delulu and login.',
            'password.required' => 'You need a password to survive out here.',
            'password.min' => 'Password gotta be at least 8 chars. That weak stuff ain\'t valid.',
            'password.confirmed' => 'Passwords don\'t match. Literal skill issue tbh 🤡',
        ]);
        
        // STEP 2: THE CREATE USER.
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'is_admin' => false, // PREVENTS ROGUE ADMINS.
        ]);

        // STEP 3: LOGIN THE USER.
        Auth::login($user);

        return redirect('/');
    }

    // LOGOUT FUNCTIONS.
    public function logout(Request $request)
    {
        // STEP 1: LOGOUT THE USER.
        Auth::logout();

        // STEP 2: RESET THE SESSION.
        $request->session()->invalidate();

        // STEP 3: REGENERATE THE SESSION.
        $request->session()->regenerateToken();

        // STEP 4: REDIRECT TO THE LOGIN SCREEN.
        return redirect()->route('login');
    }
}
