 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah menu</h4>
                      <form class="form-horizontal style-form" method="post" action="{{url('/koki/menu/tambah')}}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_menu">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="harga">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="kategori">
                                    <option value="Pembuka">Makanan Pembuka</option>
                                    <option value="Penutup">Makanan Penutup</option>
                                    <option value="Minuman">Minuman</option>
                                  </select>
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