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
        <div class="row">
            <?php //LISTE VON CRF-BAUSTEINEN ?>
            <div class="col-md-2" style="background-color: aquamarine">
                SPALTE FÜR BAUSTEIN-BUTTONS!
            </div>

            <?php //EINGABEMASKEN ?>
            <div class="col-md-5" style="background-color: aliceblue; border-width: thin">
                <div class="">
                    <p style="margin-bottom: 0px; margin-top: 15px"><b>Baustein: Checkbox</b></p>
                    <form class="form-group">
                        <input class="col-md-6" type="text" name="frage" placeholder="Frage" id="input-eingabemaske"></input>
                        <input class="col-md-6" type="text" name="frage" placeholder="Name" id="input-eingabemaske"></input>
                        <input class="col-md-2" type="checkbox" name="required">Pflichtangabe</input>

                        <input class="col-md-5" type="text" name="check1" placeholder="check1" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check1-wert" placeholder="check1-wert" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check2" placeholder="check2" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check2-wert" placeholder="check2-wert" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check3" placeholder="check3" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check3-wert" placeholder="check3-wert" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check4" placeholder="check4" id="input-eingabemaske"></input>
                        <input class="col-md-5" type="text" name="check4-wert" placeholder="check4-wert" id="input-eingabemaske"></input>
                        <input class="btn btn-primary" type="submit" id="input-eingabemaske" value="Bestätige"></input>
                    </form>
                </div>

            </div>

            <?php //LIVE-ANSICHT!?>
            <div class="col-md-5" style="background-color: aquamarine">
                BEREICH FÜR LIVEANSICHT!
            </div>
        </div>

    </div>
@endsection