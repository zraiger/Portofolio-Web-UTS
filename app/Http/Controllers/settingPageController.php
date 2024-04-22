<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class settingPageController extends Controller
{
    function index()
    {
        $datapage = halaman::orderBy('judul', 'asc')->get();
        return view("dashboard.settingPage.index")->with('datapage', $datapage);
    }
    function update(Request $request)
    {
        metadata::updateOrCreate(['metakey' => '_pabout'], ['metaval' => $request->_pabout]);
        metadata::updateOrCreate(['metakey' => '_pinter'], ['metaval' => $request->_pinter]);
        metadata::updateOrCreate(['metakey' => '_paward'], ['metaval' => $request->_paward]);

        return redirect()->route('settingPage.index')->with('success','Succesfully updated the data');
    }
}
