@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center me-5">
        <a href="https://storyset.com/people" target="_blank"><img src="{{ asset('gifs/Woman reading.gif') }}" alt="Mulher lendo um livro"></a>
        <form action="/signin" method="POST" style="width:400px" class="ms-5">
            
            @csrf

            <h1 class="text-center">Login</h1>

            <input class="form-control mb-3 mt-2" name="email" placeholder="Email" type="text">

            <input class="form-control mb-3" name="password" placeholder="Senha" type="password">

            <button class="btn text-white w-100 mb-3" type="submit" style="background-color: #FF725E">Entrar</button>

            <p class="text-center">Ainda não tem conta? <a href="/register">Cadastre-se aqui!</a></p>

        </form>
    </div>
@endsection