@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-body">

                    <form action="{{ url('edit-characters/'.$characters->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">AccountID</label>
                            <input type="text" name="accountID" value="{{$characters->accountID}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Vorname</label>
                            <input type="text" name="firstname" value="{{$characters->firstname}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nachname</label>
                            <input type="text" name="lastname" value="{{$characters->lastname}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geld</label>
                            <input type="text" name="money" value="{{$characters->money}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
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

