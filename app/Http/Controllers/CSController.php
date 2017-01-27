<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use Carbon\Carbon;
use Auth;
use Session;
class CSController extends Controller
{
    public function index(){
    	$today = Carbon::today();
    	$jwb1 = Kuisioner::where('tgl_kuesioner',$today->toDateString())
    			->avg('jawaban_satu');
    	$jwb2 = Kuisioner::where('tgl_kuesioner',$today->toDateString())
    			->avg('jawaban_dua');
    	$jwb3 = Kuisioner::where('tgl_kuesioner',$today->toDateString())
    			->avg('jawaban_tiga');	
    	$saran =  Kuisioner::where('tgl_kuesioner',$today->toDateString())
    				->select('kritik_saran')
    				->get();					
    	return view('kuisioner.kuis',['jwb1'=>$jwb1,'jwb2'=>$jwb2,'jwb3'=>$jwb3,'tgl'=>$today->toDateString(),'saran'=>$saran]);
    }
    public function getTambah(){
    	return view('kuisioner.tambah');
    }
    public function postTambah(Request $request){
    	$today = Carbon::today();
    	$data = [
    		'jawaban_satu' => $request->input('jwb1'),
    		'jawaban_dua' => $request->input('jwb2'),
    		'jawaban_tiga' => $request->input('jwb3'),
    		'kritik_saran' => $request->input('saran'),
    		'tgl_kuesioner' => $today->toDateString(),
    		'id_pegawai' => Auth::user()->id
    	];
    	$register = Kuisioner::create($data);
	    if($register){
	      Session::flash('success','Terima Kasih Telah Mengisi Kuisioner !');
	      return redirect('/customer/kuisioner/tambah');
	    }
    }
    public function cari(Request $request){
    	$today = $request->input('tanggal');
    	$jwb1 = Kuisioner::where('tgl_kuesioner',$today)
    			->avg('jawaban_satu');
    	$jwb2 = Kuisioner::where('tgl_kuesioner',$today)
    			->avg('jawaban_dua');
    	$jwb3 = Kuisioner::where('tgl_kuesioner',$today)
    			->avg('jawaban_tiga');	
    	$saran =  Kuisioner::where('tgl_kuesioner',$today)
    				->select('kritik_saran')
    				->get();					
    	return view('kuisioner.kuis',['jwb1'=>$jwb1,'jwb2'=>$jwb2,'jwb3'=>$jwb3,'tgl'=>$today,'saran'=>$saran]);
    }
}
