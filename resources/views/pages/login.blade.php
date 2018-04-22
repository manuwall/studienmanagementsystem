@extends('layouts.template')

@section('content')
<div class="jumbotron">
        <div class="container">
            <h1 class="page-header">{{$title}}</h1><hr>
            <h3>{{$subtitle}}</h3>
            <br>
            <form action="/dashboard">
                <div class="form-group">
                    <label for="usr">Benutzername</label>
                    <input type="text" class="form-control" id="usr" placeholder="username">
                </div>
                <div>
                    <label for="pwd">Kennwort</label>
                    <input  type="password" class="form-control" id="pwd" placeholder="password">
                </div>
                <div>
                    <button style="margin-top:10px" type="submit" class="btn btn-info">Anmelden</button>
                </div>
            </form>
        </div>
    </div>
@endsection