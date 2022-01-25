<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LigaController extends Controller
{
    
    public function create(){

        return view('ligas.create');

    }

    public function edit(){

    }

    public function get(){

    }

    public function show($id){
        
        return view('liga.details', [
            'liga' => User::findOrFail($id)
        ]);
    }

    public function list(){
        
    }

}
