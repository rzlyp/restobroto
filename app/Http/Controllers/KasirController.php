<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Transaksi;
use App\Pesanan;
use App\Meja;
use App\Menu;

class KasirController extends Controller
{
    public function index(){
    	$meja = Meja::where('status','Terisi')->orWhere('status','Selesai')->get();
    	return view('kasir',['meja'=>$meja]);
    }

    public function done($no){
    	$meja = Meja::where('no_meja',$no);
    	$meja->update(['status'=>'Kosong','no_transaksi'=>0]);
        return redirect('/kasir');
    }
     public function detailPesan($id,$no){
        $pesanan = Transaksi::join('menu','menu.id_menu','detail_transaksi.id_menu')
                    ->join('pesanan','pesanan.no_pesanan','detail_transaksi.no_pesanan')
                    ->where([['detail_transaksi.no_meja',$id],['detail_transaksi.no_pesanan',$no]])
                    ->get();
        $totals = Pesanan::where('no_pesanan',$no)->select('total')->first();           
        return view('pesan.kasir',['pesanan'=>$pesanan,'totals'=>$totals,'no'=>$id]);
    }
}
