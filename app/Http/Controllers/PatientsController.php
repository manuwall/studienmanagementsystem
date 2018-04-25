<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Papatient;
use DB;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Meine Patienten";
        $subtitle = "Wählen Sie einen Patienten aus";
        $crfs = DB::select(DB::raw("SELECT * FROM Papatient Pa, Patient_Studie Ps, Ststudie St, crf_studie Cs, crf Cr 
        WHERE Pa.id = Ps.PaID AND Ps.StID = St.StID AND St.StID = Cs.StID AND Cs.CrID = Cr.CrID"));

        $papatients = Papatient::all();
        $papatients = Papatient::orderBy('created_at', 'asc')->paginate(10);
        return view('patients.patients')->with('papatients', $papatients)->with('crfs', $crfs)->with('title', $title)->with('subtitle', $subtitle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Patient - Neuanlage';
        $subtitle = 'Geben Sie alle nötigen Daten an um einen neuen Patienten anzulegen';

        return view('patients.newpatient')->with('title', $title)->with('subtitle', $subtitle);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vorname' => 'required',
            'nachname' => 'required',
            'geburtsdatum' => 'required',
            'geburtsort' => 'required'
        ]); 

        // Erstelle Patient-Datensatz
        $papatient = new Papatient();
        $papatient->pavorname = $request->input('vorname');
        $papatient->panachname = $request->input('nachname');
        $papatient->pageburtsdatum = $request->input('geburtsdatum');
        $papatient->pageburtsort = $request->input('geburtsort');
        $papatient->save();

        return redirect('patients')->with('success', 'Patient wurde angelegt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Patienten-Anzeige";
        $subtitle = "Lassen Sie sich alles zu einem Patienten anzeigen";
        $crf = DB::select(DB::raw("SELECT * FROM Papatient Pa, Patient_Studie Ps, Ststudie St, crf_studie Cs, crf Cr 
        WHERE Pa.id = Ps.PaID AND Ps.StID = St.StID AND St.StID = Cs.StID AND Cs.CrID = Cr.CrID"));

        $papatient = Papatient::find($id);
        return view('patients.show')->with('papatient', $papatient)->with('title', $title)->with('crf', $crf)->with('subtitle', $subtitle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $papatient = Papatient::find($id);
        return view('patients.edit')->with('patients', $papatient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function crfs() {

    }
}
