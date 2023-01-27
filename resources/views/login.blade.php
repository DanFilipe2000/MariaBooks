@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center me-5">
        <a href="https://storyset.com/people" target="_blank"><img src="{{ asset('img/Reading glasses-pana.png') }}" alt="Mulher lendo um livro" style="width: 400px"></a>
        <form action="/signin" method="POST" style="width:400px; border-left: solid 1px grey; padding: 50px" class="ms-5">
            
            @csrf

            <h1>Login</h1>

            <label for="email" class="mt-3">Email:</label>

            <input class="form-control mb-3 mt-2" name="email" placeholder="joao@gmail.com" type="text">

            <label for="password" class="font-italic">Senha:</label>

            <input class="form-control mb-3" name="password" placeholder="******" type="password">

            <button class="btn text-white w-100 mb-3" type="submit" style="background-color: #8B5E3C">Entrar</button>

            <p class="text-center" style="opacity: 80%">Ainda não tem conta? <a href="/register">Cadastre-se aqui!</a></p>

        </form>
    </div>
@endsection