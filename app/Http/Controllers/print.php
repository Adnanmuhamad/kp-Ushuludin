<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class printcontroller extends Controller
{
    public function index($id){
        $tableDosenMatkul=DB::table('dos_mat')->where('id_dosen',id)->get();
        

        
    } 
    //
}
