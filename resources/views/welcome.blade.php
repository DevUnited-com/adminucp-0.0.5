@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <center><img src="{{asset('images/logos/adminucp_logo.png')}}" alt="Logo" width="600" height="400" ></center>
    <center><p>Programmierungsfortschritt</p></center>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100">3%</div>
    </div>    <div class="row mt-4">
        <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                        Check
                    </div>
                </div>
                Funktioniert auf alle 3 Launchern <br> Rage:MP, AltV, FiveM<br>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                        Check
                    </div>
                </div>
                Passe deine Ingame Datenbank im Installer an,<br> alles weitere macht der<br> Installer Automatisch für dich,
                Lehn dich zurück, oder hole dir daweile ein Kaffee!
            </div>
        </div>
        <div class="col-sm-4">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                        Garantie
                    </div>
                </div>
                Du möchtest eine neue Funktion,  <br>oder was geändert haben? <br>
                Sag uns Bescheid, wir übernehmen das für dich!
            </div>
        </div>
    </div>
    <br>
    <center><p>Die Seite kann in den <strong>Einstellungen</strong> bearbeitet werden.</p></center>
    <br>


@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

@section('footer')
    <footer>@include('layouts.footer')</footer>
@stop

