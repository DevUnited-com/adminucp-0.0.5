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
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Bereich</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($team as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->level }}</td>
                <td>{{ $item->bereich }}</td>
                <td>
                    <a href="{{ url('edit-team/'.$item->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
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

