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
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2" style="overflow:scroll; height:400px">
                @if(count($papatients) > 0)
                
                    @foreach($papatients as $papatient)
                    <div class="well" id="single-patient" onclick="location.href='patients/{{$papatient->id}}';">
                        <span class="col" id="single-patient-name">{{$papatient->id}} - {{$papatient->PaVorname}}, {{$papatient->PaNachname}}</span>
                        <p class ="col" id="single-patient-text">{{$papatient->PaGeburtsdatum}}</p>
                    </div>
                    @endforeach
                @else
                    <p>Keine Patienten vorhanden</p>
                @endif
            </div>

            <div class="col-md-2" id="">
                @if(count($crfs) > 0)
                <div id="patient-table">
                    <table class="table-default" >
                        <tr>
                        @foreach($crfs as $crf)
                            <div><td>{{$crf->CrID}} : {{$crf->CrName}}</td></div>
                        @endforeach
                        </tr>
                    </table>
                    @endif
                </div>
            </div>

            <div class="col-md-8" style="background-color:aliceblue;">
                <div class="row">
                    <button class="btn btn-primary" id="crf-resumebtn" onclick="">Befragung fortsetzen</button>
                    <span class="col-sm-4" id="crf-span">CRF: {{$crf->CrID}} - {{$crf->CrName}}</span>
                    <span class="col-sm-5" id="crf-span">Zuletzt bearbeitet: {{$crf->updated_at}}</span>
                </div>
                <hr>
                <?php // Hier soll der CRF geladen werden, der für den Patienten angeklickt wurde?>
            </div>
        </div>
    </div>
</div>
@endsection
