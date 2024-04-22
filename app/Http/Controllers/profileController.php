<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index()
    {
        return view("dashboard.profile.index");
    }

    function update(Request $request)
    {
        $request->validate([
            '_foto' => 'mimes:jpeg,jpg,png,gif',
            '_email' => 'required|email',
        ], [
            '_foto.mimes' => 'Photo file can only be JPEG, JPG, PNG, and or GIF',
            '_email.required' => 'Email must be filled',
            '_email.email' => 'Email format is invalid'
        ]);

        if ($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ext = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ext";
            $foto_file->move(public_path("foto"), $foto_baru);

            $foto_old = get_metaval('_foto');
            File::delete(public_path('foto') . "/" . $foto_old);
            metadata::updateOrCreate(['metakey' => '_foto'], ['metaval' => $foto_baru]);
        }

        metadata::updateOrCreate(['metakey' => '_email'], ['metaval' => $request->_email]);
        metadata::updateOrCreate(['metakey' => '_kota'], ['metaval' => $request->_kota]);
        metadata::updateOrCreate(['metakey' => '_prov'], ['metaval' => $request->_prov]);
        metadata::updateOrCreate(['metakey' => '_nohp'], ['metaval' => $request->_nohp]);

        metadata::updateOrCreate(['metakey' => '_ig'], ['metaval' => $request->_ig]);
        metadata::updateOrCreate(['metakey' => '_twt'], ['metaval' => $request->_twt]);
        metadata::updateOrCreate(['metakey' => '_lin'], ['metaval' => $request->_lin]);
        metadata::updateOrCreate(['metakey' => '_git'], ['metaval' => $request->_git]);

        return redirect()->route('profile.index')->with('success', 'Succesfully updated the data');
    }
}
