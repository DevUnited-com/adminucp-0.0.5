@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-body">

                    <form action="{{ url('add-account') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Account Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Account Passwort</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Socialclub Name</label>
                            <input type="text" name="socialClub" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
    <footer>@include('layouts.footer')</footer>
@stop

