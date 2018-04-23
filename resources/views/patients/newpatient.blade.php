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
        {!! Form::open(['action' => 'PatientsController@store', 'method' => 'newpatient']) !!}
        <div class="form-group">
            {{Form::label('vorname', 'Vorname')}}
            {{Form::text('vorname', '', ['class' => 'form-control', 'placeholder' => 'Vorname'])}}
        </div>

        <div class="form-group">
            {{Form::label('nachname', 'Nachname')}}
            {{Form::text('nachname', '', ['class' => 'form-control', 'placeholder' => 'Nachname'])}}
        </div>

        <div class="form-group">
            {{Form::label('geburtsdatum', 'Geburtsdatum')}}
            {{Form::text('geburtsdatum', '', ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd'])}}
        </div>

        <div class="form-group">
            {{Form::label('geburtsort', 'Geburtsort')}}
            {{Form::text('geburtsort', '', ['class' => 'form-control', 'placeholder' => 'Geburtsort'])}}
        </div>
        {{Form::submit('Patient anlegen', ['class' => 'btn btn-primary'])}}
        
        
        {!! Form::close() !!}
    </div>
</div>
@endsection
