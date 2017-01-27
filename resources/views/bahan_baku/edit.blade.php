 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Bahan Baku</h4>
                       @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                       @foreach($bahan as $data) 
                      <form class="form-horizontal style-form" method="post" action="{{url('/pantry/bahan/edit')}}/{{$data->id_bahan}}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Bahan Baku</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_bahan" value="{{$data->nama_bahan}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="stok" value="{{$data->stok}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Masuk</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="tgl_masuk" value="{{$data->tgl_masuk}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Kadaluarsa</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="tgl_kadaluarsa" value="{{$data->tgl_kadaluarsa}}">
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
