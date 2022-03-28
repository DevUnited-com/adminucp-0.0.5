@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="card-body">

        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Benutzen</th>
                <th>Weitergeben</th>
                <th>Typ</th>
                <th>Fülllevel</th>
                <th>Gewicht</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->itemName }}</td>
                    <td>{{ $items->usable }}</td>
                    <td>{{ $items->giveable }}</td>
                    <td>{{ $items->type }}</td>
                    <td>{{ $items->fillvalue }}</td>
                    <td>{{ $items->itemcount }}</td>
                    <td>
                        <a href="{{ url('edit-items/'.$items->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
                    </td>
                    <td>
                        <a href={{url('delete-items/'.$items->id)}}"" class="btn btn-danger btn-sm">Löschen</a>
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

@section('footer')
    <footer>@include('layouts.footer')</footer>
@stop

