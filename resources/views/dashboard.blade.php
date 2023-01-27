@extends('layouts.app')

@section('content')

    @include('components.navbar')

    <div class="container w-100">
        <div class="row min-vh-100">
            <div class="col-sm">
                @include('components.createbook')
            </div>
            <div class="col-sm">
                @include('components.createbook')
            </div>
            <div class="col-sm">
                @include('components.createbook')
            </div>
        </div>
    </div>

@endsection