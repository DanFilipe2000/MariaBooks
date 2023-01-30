@extends('layouts.app')

@section('content')

    @include('components.navbar')

    <div class="container" style="max-width: 100%">
        <div class="row min-vh-100 align-items d-flex" style="justify-content: space-between;">
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