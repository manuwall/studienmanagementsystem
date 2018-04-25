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

    <div class="container">
        <div class="table">
            <table>
                <tr>
                    <th>PatientenID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Geburtsdatum</th>
                    <th>Geburtsort</th>
                </tr>
                <tr>
                    <td>{{$papatient->id}}</td>
                    <td>{{$papatient->PaVorname}}</td>
                    <td>{{$papatient->PaNachname}}</td>
                    <td>{{$papatient->PaGeburtsdatum}}</td>
                    <td>{{$papatient->PaGeburtsort}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection