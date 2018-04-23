@extends('layouts.template')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <h1 class="page-header col-md-6">{{$title}}</h1>
            <button class="btn btn-success col-md-0" id="btnNeuanlage" onclick="location.href='patients/create';"><span>Neuanlage</span></button>
            <button class="btn btn-danger col-md-0" id="btnLogout"><span>Logout</span></button>
            
        </div>
        <hr>
        <h3>{{$subtitle}}</h3>
    </div>

    
    <div class="container">
        @if(count($papatients) > 0)
            @foreach($papatients as $papatient)
                <div class="well row" id="single-patient" onclick="">
                    <h3 class="col" id="single-patient-name">{{$papatient->PaID}} - {{$papatient->PaVorname}}, {{$papatient->PaNachname}}</h3>
                    <p class ="col" id="single-patient-text">Geboren am: {{$papatient->PaGeburtsdatum}} in {{$papatient->PaGeburtsort}}</p>
                    <hr>
                    <p class="col" id="single-patient-text">Zuletzt bearbeitet: {{$papatient->updated_at}}</p>
                    <button class="col-md-0 btn btn-primary" id="btnEdit" type="button">Bearbeiten</button>
                </div>
            @endforeach
        @else
            <p>Keine Patienten vorhanden</p>
        @endif
    </div>
</div>
@endsection
