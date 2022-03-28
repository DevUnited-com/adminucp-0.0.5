@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CyberLifeCity 2022 UCP</h1>
@stop

@section('content')
    <center><p><strong>Die Löschfunktion bitte nicht ausversehen drücken! Da keine Meldungen kommen, sondern es sofort die Charaktere löscht!!!</strong></p></center>
    <center><p><strong>Jeglicher Funktionsverwendung wird absofort auch geloggt; und wird bei Missbrauch Sanktioniert -- heißt: Projektausschluss auf Lebenszeit</strong></p></center>

    <div class="card-body">

        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th>ID</th>
                <th>AccountID</th>
                <th>Whitelist</th>
                <th>Adminrank</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Geld</th>
                <th>Gang</th>
                <th>Gangrang</th>
                <th>Fraktion</th>
                <th>Bearbeiten</th>
                <th>Löschen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($characters as $characters)
                <tr>
                    <td>{{ $characters->id }}</td>
                    <td>{{ $characters->accountID }}</td>
                    <td>{{ $characters->whitelisted }}</td>
                    <td>{{ $characters->adminRank }}</td>
                    <td>{{ $characters->firstname }}</td>
                    <td>{{ $characters->lastname }}</td>
                    <td>{{ $characters->money }}</td>
                    <td>{{ $characters->gang }}</td>
                    <td>{{ $characters->gangrang }}</td>
                    <td>{{ $characters->faction }}</td>
                    <td>
                        <a href="{{ url('edit-characters/'.$characters->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
                    </td>
                    <td>
                        <a href={{url('delete-characters/'.$characters->id)}}"" class="btn btn-danger btn-sm">Löschen</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <center><p>Die Löschfunktion bitte nicht ausversehen drücken! Da keine Meldungen kommen, sondern es sofort die Charaktere löscht!!!</p></center>

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

