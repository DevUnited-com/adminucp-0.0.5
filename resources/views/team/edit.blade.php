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

                    <form action="{{ url('update-team/'.$team->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Roleplay Name</label>
                            <input type="text" name="name" value="{{$team->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$team->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Level</label>
                            <input type="text" name="level" value="{{$team->level}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Bereich</label>
                            <input type="text" name="bereich" value="{{$team->bereich}}" class="form-control">
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

