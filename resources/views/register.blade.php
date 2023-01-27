@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center me-5">
        <a href="https://storyset.com/people" target="_blank"><img src="{{ asset('img/Sign up-amico.png') }}" alt="Computador" style="width:400px"></a>
        <form action="/signup" method="POST" style="width:400px; border-left: solid 1px grey; padding: 50px">
            
            @csrf

            <h1 class="mb-3">Cadastro</h1>

            <label for="name">Nome e sobrenome:</label>

            <input class="form-control mb-3" name="name" placeholder="Nome Completo" type="text">

            <label for="email">Email:</label>

            <input class="form-control mb-3" name="email" placeholder="Email (exemple@exemple.com)" type="text">

            <label for="password">Senha:</label>

            <input class="form-control mb-3" name="password" placeholder="Senha" type="password">

            <button class="btn text-white w-100 mb-3" type="submit" style="background-color: #8B5E3C">Cadastrar</button>

            <p class="text-center" style="opacity: 80%">Já tem uma conta? <a href="/login">Entre aqui!</a></p>
        </form>
    </div>
@endsection