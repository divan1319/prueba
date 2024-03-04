<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
{
    //

    public function compras(){
       
        $user = auth()->user();
        
        return view('compras.compras',[
            'user' => $user,
        ]);
    }
}
