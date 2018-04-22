@extends('layouts.template')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <h1 class="page-header col-md-6" id="site-header">{{$title}}</h1>
            <button class="btn btn-danger col-md-0" id="btnLogout"><span>Logout</span></button>
        </div>
        <hr>
        <h3 id="dashboard-subtitle">{{$subtitle}}</h3>
    </div>

    <div class="container" id="dashboard">
        <div class="row" id="dashboard-row1">
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='patients';">
                <span><b>Meine Patienten</b></span><hr>
                <span>Behalten Sie Ihre Patienten im Überblick</span>
            </div>
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='befragungen';">
                <span class="panel-body"><b>Meine Befragungen</b></span><hr>
                <span>Sehen Sie was war</span>
            </div>
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='studien';">
                <span><b>Studien</b></span><hr>
                <span>Schauen Sie an welchen Studien Sie mitwirken</span>
            </div>
        </div>

        <div class="row" id="dashboard-row2">
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='aufgaben';">
                <span><b>Meine Aufgaben</b></span><hr>
                <span>Was gibt es zu tun?</span>
            </div>
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='termine';">
                <span><b>Meine Termine</b></span><hr>
                <span>Kommen Sie nicht zu spät</span>
            </div>
            <div class="col-md-3" id="dashboard-div3" onclick="location.href='bereiche';">
                <span><b>Mein Bereich</b></span><hr>
                <span>Platz für Persönliches</span>
            </div>
        </div>
    </div>
</div>
@endsection