<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meja;
use Auth;
use Session;
use App\Menu;
use App\Pesanan;
use App\Transaksi;
use Carbon\Carbon;

class PelayanController extends Controller
{
    public function index(){
    	$meja = Meja::where('status','Kosong')->get();
    	return view('pelayan',['meja'=>$meja]);
    }
    public function menu($id){
    	$today = Carbon::now();
    	$no = $id.''.$today->day.''.($today->month).''.$today->year.''.$today->hour.''.$today->minute;
    	$meja = Meja::where('no_meja',$id);
    	$meja->update(['no_transaksi'=>$no]);
    	$data = [
    		'no_pesanan' => $no,
    		'tgl_pesanan' => $today->toDateString(),
    		'id_pegawai' => Auth::user()->id,
    		'total' => 0
    	];
    	$pesanan = Pesanan::create($data);

    	return redirect('/pelayan/meja/menu/'.$id.'/'.$no);
    }
    public function getList($id,$no){

    	$mejas = Meja::where('no_meja',$id)->get();
    	$pembuka = Menu::where('kategori','Pembuka')->get();
    	$penutup = Menu::where('kategori','Penutup')->get();
    	$minuman = Menu::where('kategori','Minuman')->get();
    	$pesanan = Transaksi::join('menu','menu.id_menu','detail_transaksi.id_menu')
    				->where([['detail_transaksi.no_meja',$id],['detail_transaksi.no_pesanan',$no]])
    				->get();
    	return view('pesan.menu',['pembuka'=>$pembuka,'penutup'=>$penutup,'minuman'=>$minuman,'mejas'=>$mejas,'pesanan'=>$pesanan]);
    }
}
