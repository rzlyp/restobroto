 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit menu</h4>
                      @foreach($menu as $data)
                      <form class="form-horizontal style-form" method="post" action="{{url('/koki/menu/edit')}}/{{$data->id_menu}}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_menu" value="{{$data->nama_menu}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="kategori">
                                    @if($data->kategori === 'Pembuka')
                                    <option value="Pembuka" selected>Makanan Pembuka</option>
                                    @elseif($data->kategori === 'Penutuo')
                                    <option value="Penutup" selected>Makanan Penutup</option>
                                    @else
                                    <option value="Minuman" selected>Minuman</option>
                                    @endif
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