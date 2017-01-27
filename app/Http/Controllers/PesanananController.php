<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Transaksi;
use App\Pesanan;
use App\Meja;
use App\Menu;

class PesanananController extends Controller
{
    public function getList(){
    	$meja = Meja::where('status','Terisi')->get();
    	return view('pesan.list_pesanan',['meja'=>$meja]);
    }
    public function add(Request $request){
    	$menu = Menu::where('id_menu',$request->input('id_menu'))->first();
    	$total = $menu->harga * $request->input('jumlah');
    	$data = [
    		'no_pesanan' => $request->input('no_pesanan'),
    		'no_meja' => $request->input('no_meja'),
    		'id_menu' => $request->input('id_menu'),
    		'jumlah' => $request->input('jumlah'),
    		'subtotal' => $total,
    		'id_pegawai' => Auth::user()->id
    	];
    	$add = Transaksi::create($data);

    	return redirect('/pelayan/meja/menu/'.$data['no_meja'].'/'.$data['no_pesanan']);
    }
    public function hapus(Request $request){
    	$hapus = Transaksi::where([['no_pesanan',$request->input('no_pesanan')],['id_menu',$request->input('id_menu')]]);
    	$hapus->delete();
    	return redirect('/pelayan/meja/menu/'.$request->input('no_meja').'/'.$request->input('no_pesanan'));
    }
    public function done(Request $request){
    	$meja = Meja::where('no_meja',$request->input('no_meja'));
    	$meja->update(['status'=>'Terisi']);
    	$totals = Transaksi::where([['no_meja',$request->input('no_meja')],['no_pesanan',$request->input('no_pesanan')]])
    				->sum('subtotal');
    	$pesanan = Pesanan::where('no_pesanan',$request->input('no_pesanan'));
    	$pesanan->update(['total'=>$totals]);			
    	return redirect('/pelayan');
    }
    public function detailPesan($id,$no){
    	$pesanan = Transaksi::join('menu','menu.id_menu','detail_transaksi.id_menu')
    				->join('pesanan','pesanan.no_pesanan','detail_transaksi.no_pesanan')
    				->where([['detail_transaksi.no_meja',$id],['detail_transaksi.no_pesanan',$no]])
    				->get();
    	$totals = Pesanan::where('no_pesanan',$no)->select('total')->first();			
    	return view('pesan.detail',['pesanan'=>$pesanan,'totals'=>$totals]);
    }
}
