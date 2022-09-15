<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarunaController extends Controller
{
    public function index(){
        return view('layouts.admin.taruna.index');
    }

    public function create(){
        return view('layouts.admin.taruna.form');
    }
}
