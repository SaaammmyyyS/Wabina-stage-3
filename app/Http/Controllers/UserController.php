<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\programming_languages;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view("main");
    }


    public function ShowTable(Request $request){
        $infos = programming_languages::find(1);

        $infos->insert([
            'favorite' => $request->input('favorite'),
        ]);

        $favorites = programming_languages::select('id', 'favorite')->get();



        return view('welcome', ['favorites' => $favorites], ['infos' => $infos]);
    }

    public function Show(){

        $infos = programming_languages::find(1);

        $favorites = programming_languages::select('id', 'favorite')->get();

        return view('welcome', ['favorites' => $favorites], ['infos' => $infos]);
    }


}
