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

    </div>
@endsection