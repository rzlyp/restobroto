<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Transaksi;
use App\Pesanan;
use App\Meja;
use App\Menu;
use App\BahanBaku;
use App\Resep;

class KokiController extends Controller
{
   public function index(){
    	$meja = Meja::where('status','Terisi')->get();
    	return view('koki',['meja'=>$meja]);
    }
    public function meja(){
        $meja = Meja::where('status','Terisi')->get();
        return response()->json($meja);
    }
    public function menu(){
    	$status = "koki";

    	return view('pesan.pesanan',['status'=>$status]);
    }
     public function detailPesan($id,$no){
    	$pesanan = Transaksi::join('menu','menu.id_menu','detail_transaksi.id_menu')
    				->join('pesanan','pesanan.no_pesanan','detail_transaksi.no_pesanan')
    				->where([['detail_transaksi.no_meja',$id],['detail_transaksi.no_pesanan',$no]])
    				->get();			
    	return view('pesan.koki',['pesanan'=>$pesanan,'id'=>$id,'no'=>$no]);
    }
    public function done(Request $request){

    	$transaksi = Transaksi::where([['no_pesanan',$request->input('no_pesanan')],['no_meja',$request->input('no_meja')]])->get();
    	foreach ($transaksi as $pesan) {
    		$resep = Resep::where('id_menu',$pesan->id_menu)->get();
    		foreach ($resep as $jml) {
    			$bahan = BahanBaku::where('id_bahan',$jml->id_bahan)->first();
    			$selisih = $bahan->stok - $jml->jumlah;
    			$bahan = BahanBaku::where('id_bahan',$jml->id_bahan);
    			$bahan->update(['stok'=>$selisih]);
    		}
    	}
        $meja = Meja::where('no_meja',$request->input('no_meja'));
        $meja->update(['status'=>'Selesai']);
    	return redirect('/koki');
    }
    public function notif(){
        $meja = Meja::where('status','Selesai')->get();
        return response()->json($meja);
    }
}
