<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;

class KriteriaController extends Controller
{
    public function index() {
        $kriteria = Bobot::all();
        // foreach($kriteria as $key) {
        //     dd(gettype($key->value));
        // }
        // // dd($kriteria[0]->key);
        return view('layouts.admin.kriteria', compact('kriteria'));
    }
}
