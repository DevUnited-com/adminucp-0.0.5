
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Account Verwaltung</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Account ID </td>
                        <td>Account Name</td>
                        <td>Socialclub Name</td>
                        <td>Whitelist Status</td>
                        <td>Bann Status</td>
                        <th>Bearbeiten</th>
                        <th>Löschen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account as $account)
                    <tr>
                        <td>{{ $account->id }}</td>
                        <td>{{ $account->username }}</td>
                        <td>{{ $account->socialClub }}</td>
                        <td>{{ $account->whitelisted }}</td>
                        <td>{{ $account->banned }}</td>
                        <td>
                            <a href="{{ url('edit-account/'.$account->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm">Löschen</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



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
