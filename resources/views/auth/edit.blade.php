 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Pegawai</h4>
                       @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                       @foreach($pegawai as $data) 
                      <form class="form-horizontal style-form" method="post" action="{{url('/admin/pegawai/edit/')}}/{{$data->id}}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pegawai</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="tgl_lahir" value="{{$data->tgl_lahir}}">
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <select name="jk">
                                    @if($data->jk === 'Laki-laki')
                                    <option value="Laki-laki" selected>Laki-laki</option>
                                    @else
                                    <option value="Perempuan" selected>Perempuan</option>
                                    @endif
                                  </select>
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No.Telp</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="no_telp" value="{{$data->no_telp}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="{{$data->username}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-10">
                                  <select name="role">
                                    <option value="{{$data->role}}">{{$data->role}}</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Koki">Koki</option>
                                    <option value="Pelayan">Pelayan</option>
                                    <option value="Pantry">Pantry</option>
                                    <option value="CS">Customer</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-sm-10">
                                  <input type="submit" class="btn btn-info" value="SIMPAN">
                              </div>
                          </div>
                      </form>
                     @endforeach 
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
           
@stop    
