@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Fahrzeug ID</th>
                <th>Charakter ID</th>
                <th>Modell</th>
                <th>Kennzeichen</th>
                <th>Tankstand</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Vehicle as $Vehicle)
                <tr>
                    <td>{{ $Vehicle-> id }}</td>
                    <td>{{ $Vehicle->charId }}</td>
                    <td>{{ $Vehicle->model }}</td>
                    <td>{{ $Vehicle->numberPlate }}</td>
                    <td>{{ $Vehicle->fill }}</td>
                    <td>
                        <a href="{{ url('edit-vehicle/'.$Vehicle->id) }}" class="btn btn-primary btn-sm">Bear5beiten</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">Löschen</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

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

