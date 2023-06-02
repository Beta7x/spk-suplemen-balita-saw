<?php

namespace App\Http\Controllers;

use App\Models\Suplemen;
use Illuminate\Http\Request;

class SAWController extends Controller
{
    public function normalization() {
        $suplements = [];
        $minHarga = Suplemen::min('harga');
        $maxBerat = Suplemen::max('berat');
        $maxVitA = Suplemen::max('jml_vitamin_a');
        $maxVitB = Suplemen::max('jml_vitamin_b');
        $maxVitC = Suplemen::max('jml_vitamin_c');

        foreach(Suplemen::all() as $data) {
            $arr = [];
            $arr["nama"] = $data->nama;
            if($data->harga) {
                $arr["harga"] = $minHarga / $data->harga;
            }
            $arr["berat"] = $data->berat / $maxBerat;
            $arr["jml_vitamin_a"] = $data->jml_vitamin_a / $maxVitA;
            $arr["jml_vitamin_b"] = $data->jml_vitamin_b / $maxVitB;
            $arr["jml_vitamin_c"] = $data->jml_vitamin_c / $maxVitC;
            array_push($suplements, $arr);
        }
        // dd($suplements);
        return $suplements;
    }

    public function get_view_normalization() {
        $suplements = $this->normalization();
        return view('layouts.admin.normalisasi', compact('suplements'));
    }

    public function preferensi() {

    }
}
