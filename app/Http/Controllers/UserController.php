<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function signin(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $validate = Validator::make($credentials, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validate->fails()) {
            if ($validate->errors()->has('email')) {
                return back()->with('error', 'Campo "email" não preenchido ou formato inválidos');
            }

            if ($validate->errors()->has('password')) {
                return back()->with('error', 'Campo "senha" não preenchido');
            }
        }

        if (auth()->attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->with('error', 'Usuário ou senha inválidos');
    }

    public function register() {
        return view('register');
    }

    public function signup(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'min:6'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if ($validate->fails()) {
            if ($validate->errors()->has('email')) {
                return back()->with('error', 'Campo "email" não preenchido ou formato inválidos');
            }

            if ($validate->errors()->has('password')) {
                return back()->with('error', 'Senha inválida');
            }

            if ($validate->erros()->has('name')) {
                return back()->with('error', 'O campo nome é obrigatório e precisa ter pelo menos 8 digitos');
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
