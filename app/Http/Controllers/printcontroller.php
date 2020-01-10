<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class printcontroller extends Controller
{
    public function index($id){
        $tableDosenMatkul=DB::table('dos_mat')->where('id',$id)->get();
        return view('print  ')
        ->with('jadwal',$tableDosenMatkul[0]);

        
    } 
    //
}
