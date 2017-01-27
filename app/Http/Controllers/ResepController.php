<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Menu;
use App\Resep;
use App\BahanBaku;

class ResepController extends Controller
{
    public function index($id){
    	$menu = Menu::where('id_menu',$id)->get();
    	$bahan = BahanBaku::All();
    	$resep = Resep::join('menu','menu.id_menu','resep.id_menu')
    				->join('bahan_baku','bahan_baku.id_bahan','resep.id_bahan')
    				->where('resep.id_menu',$id)
    				->get();
    	return view('menu.resep',['menu'=>$menu,'bahan'=>$bahan,'resep'=>$resep]);		

    }
    public function resep(Request $request){
    	$data = [
          'id_menu' => $request->input('id_menu'),
          'id_bahan' => $request->input('id_bahan'),
          'jumlah' => $request->input('jumlah')
     	 ];
		    $register = Resep::create($data);
		    if($register){
		      return redirect('/koki/menu/resep/'.$data['id_menu']);
		    }
    }
}
