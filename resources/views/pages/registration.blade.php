@extends('layouts.template')

@section('content')
<div class="jumbotron">
        <div class="container">
            <h1 class="page-header">{{$title}}</h1><hr>
            <h3>{{$subtitle}}</h3>
            <br>
            <form class="form-group">
                <div>
                    <label for="vorname">Vorname</label>
                    <input type="text" class="form-control" id="vorname" placeholder="first name" required="true">
                <div>
                    <label for="nachname">Nachname</label>
                    <input type="text" class="form-control" id="nachname" placeholder="second name" required="true">
                </div>
                <div>
                    <label for="birthday">Geburtsdatum</label>
                    <input type="date" class="form-control" id="birthday" max="today">
                </div>
                    <label for="role">Rolle</label>
                    <div class="input-group-prepend">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose role...</option>
                            <option value="1">Studienleiter</option>
                            <option value="2">Arzt</option>
                            <option value="3">Patient</option>
                        </select>
                    </div>
                <div>
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" placeholder="email address" required="true">
                </div>
                 <div>
                    <label for="usr">Benutzername</label>
                    <input type="text" class="form-control" id="usr" placeholder="username" required="true">
                </div>
                <div>
                    <label for="pwd">Kennwort</label>
                    <input type="password" class="form-control" id="pwd" placeholder="password" required="true">
                </div>
                <div>
                    <label for="confirm-pwd">Wdh. Kennwort</label>
                    <input type="password" class="form-control" id="confirm-pwd" placeholder="confirm password" required="true">
                </div>
                <div>
                    <button style="margin-top:10px" type="submit" class="btn btn-info">Registrieren</button>
                </div>
            </form>
        </div>
    </div>
@endsection