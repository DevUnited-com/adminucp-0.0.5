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

                        <form action="{{ url('update-vehicle/'.$Vehicle->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="">Charakter ID</label>
                                <input type="text" name="charId" value="{{$Vehicle->charId}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Modell</label>
                                <input type="text" name="model" value="{{$Vehicle->model}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kennzeichen</label>
                                <input type="text" name="numberPlate" value="{{$Vehicle->numberPlate}}" class="form-control">
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

