@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <div class="card-body">

            @foreach ($whitelist as $whitelist)
                <center>
            <div class="form-group">
                <label>Aktuelle Frage 1</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest1 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 2</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest2 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 3</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest3 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 4</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest4 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 5</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest5 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 6</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest6 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 7</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest7 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 8</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest8 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 9</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest9 }}" disabled>
</textarea>
            </div>
            <div class="form-group">
                <label>Aktuelle Frage 10</label>
                <textarea class="form-control" name="textarea_name" placeholder=" {{ $whitelist->quest10 }}" disabled>
</textarea>
            </div>
                    <a href="{{ url('edit-whitelist/'.$whitelist->id) }}" class="btn btn-primary btn-sm">Bearbeiten</a>

                </center>
            @endforeach


    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
    <strong>Copyright &copy; 2022 <a href="#">CLCUCP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1 alph
    </div>


@stop
