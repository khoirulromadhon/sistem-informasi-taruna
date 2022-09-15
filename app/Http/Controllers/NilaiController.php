<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(){
        return view('layouts.admin.nilai.index');
    }

    public function create(){
        return view('layouts.admin.nilai.form');
    }
}
