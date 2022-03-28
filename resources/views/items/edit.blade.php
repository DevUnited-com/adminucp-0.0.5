@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>Items bearbeiten</h3>
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

                    <form action="{{ url('edit-items/'.$items->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Item Name</label>
                            <input type="text" name="itemName" value="{{$items->itemName}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Benutzbar?</label>
                            <input type="text" name="usable" value="{{$items->usable}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Weitergeben</label>
                            <input type="text" name="giveable" value="{{$items->giveable}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Typ</label>
                            <input type="text" name="type" value="{{$items->type}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Füll-Level</label>
                            <input type="text" name="fillvalue" value="{{$items->fillvalue}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gewicht</label>
                            <input type="text" name="itemcount" value="{{$items->itemcount}}" class="form-control">
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

