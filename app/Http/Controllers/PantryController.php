<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantryController extends Controller
{
    public function index(){
    	$status = 'pantry';
    	return view('bahan_baku.bahan',['status'=>$status]);
    
    }
}
