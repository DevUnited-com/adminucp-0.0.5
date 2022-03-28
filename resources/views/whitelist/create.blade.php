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

                    <form action="{{ url('add-characters') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Account ID</label>
                            <input type="text" name="accountID" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Charakter Vorname</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Charakter Nachname</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Startgeld</label>
                            <input type="text" name="money" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Whitelist</label>
                            <input type="checkbox" name="whitelisted" value="1" checked="checked" />
                            ||| <label for="">Bann</label>
                            <input type="checkbox" name="permaDead" value="1" checked="checked" />
                        </div>
                        <div class="form-group mb-3">

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
    <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1 alph
    </div>


@stop
