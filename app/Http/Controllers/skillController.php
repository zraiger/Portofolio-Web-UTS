<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index()
    {
        $skill_url = public_path("admin/devicon.json");
        $skill_data = file_get_contents($skill_url);
        $skill_data = json_decode($skill_data, true);
        $skill = array_column($skill_data, "name");
        $skill = "'" . implode("','", $skill) . "'";

        return view('dashboard.skill.index')->with(['skill' => $skill]);
    }

    public function update(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                '_lang' => 'required',
                '_workflow' => 'required',
            ], [
                '_lang.required' => 'Enter what programming language can you use.',
                '_worlflow.required' => 'Enter what workflow can you use.',
            ]);

            metadata::updateOrCreate(['metakey' => '_lang'], ['metaval' => $request->_lang]);
            metadata::updateOrCreate(['metakey' => '_workflow'], ['metaval' => $request->_workflow]);

            return redirect()->route('skill.index')->with('success', 'Succesfully updated the data');
        }
    }
}
