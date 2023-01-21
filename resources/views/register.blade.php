@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center me-5">
        <a href="https://storyset.com/people" target="_blank"><img src="{{ asset('img/Login-amico (1).png') }}" alt="Computador" style="width:400px"></a>
        <form action="/signup" method="POST" style="width:400px">
            
            @csrf

            <h1 class="text-center">Cadastro</h1>

            <input class="form-control my-3" name="name" placeholder="Nome Completo" type="text">

            <input class="form-control mb-3" name="email" placeholder="Email (exemple@exemple.com)" type="text">

            <input class="form-control mb-3" name="password" placeholder="Senha" type="password">

            <button class="btn text-white w-100 mb-3" type="submit" style="background-color: #FF725E">Cadastrar</button>

            <p class="text-center">Já tem uma conta? <a href="/login">Entre aqui!</a></p>
        </form>
    </div>
@endsection