<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Menu;
use App\Pesanan;
use Carbon\Carbon;
use DB;

class PendapatanController extends Controller
{
    public function harian(){
        $today = Carbon::today();
    	$hari = Pesanan::whereDate('pesanan.tgl_pesanan',$today->toDateString())
                ->get();
        $total = Pesanan::whereDate('pesanan.tgl_pesanan',$today->toDateString())
                ->sum('total');      
    	return view('pendapatan.harian',['hari' => $hari,'total'=>$total]);
    }
    public function bulanan(){
    	$bulan = DB::table('pesanan')
           ->select(DB::raw("SUM(total) as total, DATE_FORMAT(tgl_pesanan,'%M') as month, YEAR(tgl_pesanan) as year"))
           ->groupBy(DB::raw("YEAR(tgl_pesanan) ASC, DATE_FORMAT(tgl_pesanan,'%M') ASC"))
           ->get();
    	return view('pendapatan.bulanan',['bulan' => $bulan]);
    }
    public function tahunan(){
    	$year = DB::table('pesanan')
           ->select(DB::raw("SUM(total) as total, YEAR(tgl_pesanan) as year"))
           ->groupBy(DB::raw("YEAR(tgl_pesanan) ASC"))
           ->get();
    	return view('pendapatan.tahunan',['year' => $year]);
    }
    public function cariHari(Request $request){
        $today = $request->input('tanggal');
        $hari = Pesanan::whereDate('pesanan.tgl_pesanan',$today)
                ->get();
         $total = Pesanan::whereDate('pesanan.tgl_pesanan',$today)
                ->sum('total');         
        return view('pendapatan.harian',['hari' => $hari,'total'=>$total]);
    }
}
