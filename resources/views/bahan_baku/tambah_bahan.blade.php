 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Bahan Baku</h4>
                       @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                      <form class="form-horizontal style-form" method="post" action="{{url('/pantry/bahan/tambah')}}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Bahan Baku</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_bahan">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="stok">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Masuk</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="tgl_masuk">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Kadaluarsa</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" name="tgl_kadaluarsa">
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-sm-10">
                                  <input type="submit" class="btn btn-info" value="SIMPAN">
                              </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
           
@stop    
