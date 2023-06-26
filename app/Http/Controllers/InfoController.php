<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\programming_languages;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function InfoPage(Request $request){
        $infos = programming_languages::find(1);

        return view('edit', compact('infos'));
    }// End Method




    public function UpdateInfo(Request $request){



        $data = programming_languages::find(1);

        $file = $request->hasFile('logo');

        if ($file) {
            $image = $request->file('logo');
            $filename = $image->getClientOriginalName();


            $image->move(public_path('logo'), $filename);
            $save_url = 'logo/'.$filename;

            $data->update([
                'favorite' => $request->favorite,
                'description' => $request->description,

                'advantage_1' => $request->advantage_1,
                'explain_1' => $request->explain_1,

                'advantage_2' => $request->advantage_2,
                'explain_2' => $request->explain_3,

                'advantage_3' => $request->advantage_3,
                'explain_3' => $request->explain_3,
                'logo' => $save_url,
            ]);
            return redirect()->route('favorite');
        }
        else {

            $request->validate([
                'favorite' => 'required',
                'description' => 'required',

                'advantage_1' => 'required',
                'explain_1' => 'required',

                'advantage_2' => 'required',
                'explain_2' => 'required',

                'advantage_3' => 'required',
                'explain_3' => 'required',
            ]);

            $data->update([
                'favorite' => $request->favorite,
                'description' => $request->description,

                'advantage_1' => $request->advantage_1,
                'explain_1' => $request->explain_1,

                'advantage_2' => $request->advantage_2,
                'explain_2' => $request->explain_3,

                'advantage_3' => $request->advantage_3,
                'explain_3' => $request->explain_3,
            ]);
            return redirect()->route('favorite');
        }


     } // End Method
}
