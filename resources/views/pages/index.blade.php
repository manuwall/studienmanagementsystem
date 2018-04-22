@extends('layouts.template')

@section('content')
<div class="jumbotron">
        <div class="container">
            <h1 class="page-header">{{$title}}</h1><hr>
            <h3>{{$subtitle}}</h3>
            <a href="login"><button type="button" class="btn btn-success btn-md">Anmelden</button></a>
            <a href="registration"><button type="button" class="btn btn-primary btn-md">Registrieren</button></a>
        </div>
    </div>
@endsection