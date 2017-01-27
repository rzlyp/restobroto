<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\BahanBaku;

class BahanBakuController extends Controller
{
	public function index(){
		$bahan = BahanBaku::All();
		return view('bahan_baku.bahan',['bahan'=>$bahan]);
	}
    public function getTambah(){
    	return view('bahan_baku.tambah_bahan');
    }
    public function postTambah(Request $request){
    	 $data = [
      'nama_bahan' => $request->input('nama_bahan'),
      'stok' => $request->input('stok'),
      'tgl_masuk' => $request->input('tgl_masuk'),
      'tgl_kadaluarsa' => $request->input('tgl_kadaluarsa'),
      'id_pegawai' => Auth::user()->id
     
    ];
    $register = BahanBaku::create($data);
    if($register){
      Session::flash('success','Bahan berhasil ditambahkan.');
      return redirect('/pantry/bahan/tambah');
    }
    }
    public function getEdit($id){
            $bahan = BahanBaku::where('id_bahan',$id)->get();
            return view('bahan_baku.edit',['bahan'=>$bahan]);
           
    }
    public function postEdit($id,Request $request){
      $edit = BahanBaku::where('id_bahan',$id);
      $data = [
      'nama_bahan' => $request->input('nama_bahan'),
      'stok' => $request->input('stok'),
      'tgl_masuk' => $request->input('tgl_masuk'),
      'tgl_kadaluarsa' => $request->input('tgl_kadaluarsa'),
      'id_pegawai' => Auth::user()->id
    ];
    $done = $edit->update($data);
    if($done){
      Session::flash('success','Bahan berhasil diubah.');
      return redirect('/pantry/');
    }
  }
  public function delete($id){
     $hps = BahanBaku::where('id_bahan',$id);
    $done = $hps->delete();
    if($done){
      Session::flash('success','Bahan berhasil dihapus.');
      return redirect('/pantry/');
    }
  }
}
