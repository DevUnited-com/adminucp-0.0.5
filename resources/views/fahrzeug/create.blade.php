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

                    <form action="{{ url('add-vehicle') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Charakter ID</label>
                            <input type="text" name="charId" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Fahrzeug Model</label>
                            <input type="text" name="model" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kennzeichen</label>
                            <input type="text" name="numberPlate" class="form-control">
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

