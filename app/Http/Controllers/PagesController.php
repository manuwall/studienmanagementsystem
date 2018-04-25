<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        $title = "Studienmanagementsystem";
        $subtitle = "Klinische Studien leicht gemacht";
        return view('pages.index')->with('title', $title)->with('subtitle', $subtitle);
    }

    public function login() {
        $title = "Anmelden";
        $subtitle = "Bitte geben Sie Benutzername und Kennwort ein";
        return view('pages.login')->with('title', $title)->with('subtitle', $subtitle);
    }

    public function registration() {
        $title = "Registration";
        $subtitle = "Bitte tragen Sie alle notwendigen Daten ein";
        return view('pages.registration')->with('title', $title)->with('subtitle', $subtitle);
    }

    public function dashboard() {
        $title = 'Dashboard';
        $subtitle = "Meine Übersicht";
        return view('pages.dashboard')->with('title', $title)->with('subtitle', $subtitle);
    }

    public function crfeditor() {
        $title = 'CRF-Konfigurator';
        $subtitle = "Erstellen Sie Ihren individuellen CRF";
        return view('crf.createcrf')->with('title', $title)->with('subtitle', $subtitle);
    }

}
