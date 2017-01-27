<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Resep;
use Auth;
use Session;

class MenuController extends Controller
{
    public function menu(){
    	$status = 'pelayan';
    	return view('pesan.menu',['status'=>$status]);
    }

    public function index(){
        $menu = Menu::All();
        return view('menu.menu',['menu'=>$menu]);
    }
    public function getTambah(){
        return view('menu.tambah_menu');
    }
    public function postTambah(Request $request){
         $data = [
          'nama_menu' => $request->input('nama_menu'),
          'harga' => $request->input('harga'),
          'kategori' => $request->input('kategori'),
          'id_pegawai' => Auth::user()->id
     
    ];
    $register = Menu::create($data);
    $menus = Menu::where('nama_menu',$data['nama_menu'])->first();
    if($register){
      Session::flash('success','Menu berhasil ditambahkan.');
      return redirect('/koki/menu/resep/'.$menus->id_menu);
    }
    }
    public function getEdit($id){
            $menu = Menu::where('id_menu',$id)->get();
            return view('menu.edit',['menu'=>$menu]);
           
    }
    public function postEdit($id,Request $request){
      $edit = Menu::where('id_menu',$id);
      $data = [
          'nama_menu' => $request->input('nama_menu'),
          'harga' => $request->input('harga'),
          'kategori' => $request->input('kategori'),
          'id_pegawai' => Auth::user()->id
     
    ];
    $done = $edit->update($data);
    if($done){
      Session::flash('success','Menu berhasil diubah.');
      return redirect('/koki/menu');
    }
  }
  public function delete($id){
    $hps = Menu::where('id_menu',$id);
    $resep = Resep::where('id_menu',$id);
    $resep->delete();
    $done = $hps->delete();
    if($done){
      Session::flash('success','Menu berhasil dihapus.');
      return redirect('/koki/menu');
    }
  }
  public function detail($id){
    $menu = Menu::where('id_menu',$id)->get();
    $resep = Resep::join('menu','menu.id_menu','resep.id_menu')
                    ->join('bahan_baku','bahan_baku.id_bahan','resep.id_bahan')
                    ->where('resep.id_menu',$id)
                    ->get();
      return view('menu.detail',['menu'=>$menu,'resep'=>$resep]);  
  }

}
