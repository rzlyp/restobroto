<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
class AdminController extends Controller
{
    public function index(){
    	return view('admin');
    }
    public function getRegister(){
            $status = 'Admin';
            return view('auth.daftar',['status'=>$status]);
           
    }
    public function postRegister(Request $request){

    $data = [
      'nama' => $request->input('nama'),
      'jk' => $request->input('jk'),
      'alamat' => $request->input('alamat'),
      'tempat_lahir' => $request->input('tempat_lahir'),
      'tgl_lahir' => $request->input('tgl_lahir'),
      'no_telp' => $request->input('no_telp'),
      'username' => $request->input('username'),
      'role' => $request->input('role'),
      'password' => bcrypt($request->input('password')),
      'remember_token' => ''
    ];
    $register = User::create($data);
    if($register){
      Session::flash('success','Pegawai berhasil ditambahkan.');
      return redirect('/admin/pegawai/tambah');
    }
  }
  public function pegawai(){
      $pegawai = User::where('role','!=','Admin')->get();
      return view('auth.pegawai',['pegawai'=>$pegawai]);
  }
  public function getEdit($id){
            $pegawai = User::where('id',$id)->get();
            return view('auth.edit',['pegawai'=>$pegawai]);
           
    }
    public function postEdit($id,Request $request){
      $edit = User::find($id);
      $data = [
        'nama' => $request->input('nama'),
        'jk' => $request->input('jk'),
        'alamat' => $request->input('alamat'),
        'tempat_lahir' => $request->input('tempat_lahir'),
        'tgl_lahir' => $request->input('tgl_lahir'),
        'no_telp' => $request->input('no_telp'),
        'username' => $request->input('username'),
        'role' => $request->input('role'),
        'password' => bcrypt($request->input('password'))
      ];
    $done = $edit->update($data);
    if($done){
      Session::flash('success','Pegawai berhasil diubah.');
      return redirect('/admin/pegawai/list');
    }
  }
  public function delete($id){
     $hps = User::find($id);
      
    $done = $hps->delete();
    if($done){
      Session::flash('success','Pegawai berhasil dihapus.');
      return redirect('/admin/pegawai/list');
    }
  }
}
