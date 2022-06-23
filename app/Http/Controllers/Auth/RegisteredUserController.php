<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        echo '<script>console.log("Your stuff here")</script>';

        $request->validate([
            'nome_empresa' => ['bail','required', 'string', 'max:255', 'unique:users'],
            'nome_responsavel' => ['required', 'string', 'max:255'],
            'cpf_cnpj' => ['required', 'string', 'max:255', 'unique:users'],
            'telefone' => ['required', 'string', 'phone','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cep' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'number', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
