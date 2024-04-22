<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        $about_id = get_metaval('_pabout');
        $about_data = halaman::where('id', $about_id)->first();

        $interest_id = get_metaval('_pinter');
        $interest_data = halaman::where('id', $interest_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();

        return view('front.index')->with([
            'about' => $about_data,
            'interest '=> $interest_data,
            'experience' => $experience_data,
            'education' => $education_data,
        ]);
    }
}
