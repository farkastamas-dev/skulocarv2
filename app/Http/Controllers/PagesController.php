<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function szerviz()
    {
        return view('pages.szerviz');
    }
    public function szakszerviz()
    {
        return view('pages.szakszerviz');
    }
    public function hanggenerator()
    {
        return view('pages.hanggenerator');
    }
    public function referenciaink()
    {
        return view('pages.referenciaink');
    }
    public function autokozmetika()
    {
        return view('pages.autokozmetika');
    }
    public function arajanlat()
    {
        return view('pages.arajanlat');
    }
    public function kapcsolat()
    {
        return view('pages.kapcsolat');
    }
}
