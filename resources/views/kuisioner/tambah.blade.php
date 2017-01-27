 @extends('dashboard')
    @section('content') 
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Isi Kuisioner Anda</h4>
                       @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                      <form class="form-horizontal style-form" method="post" action="{{url('/customer/kuisioner/tambah')}}">
                          <div class="form-group">
                             
                              <div class="col-lg-7">
                                <h4>Apakah Pelayanan Disini Sangat Memuaskan ?</h4>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-6">
                                 <input type="radio" name="jwb1" value="0"> Sangat Buruk
                                <input type="radio" name="jwb1" value="1"> Buruk
                                <input type="radio" name="jwb1" value="2"> Cukup Memuaskan
                                <input type="radio" name="jwb1" value="3"> Memuaskan
                                <input type="radio" name="jwb1" value="4"> Sangat Memuaskan
                              </div>
                          </div>
                          <div class="form-group">
                             
                              <div class="col-lg-7">
                                <h4>Bagimana Kualitas Makanan/Minuman Disini ?</h4>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-6">
                                 <input type="radio" name="jw2" value="0"> Sangat Buruk
                                <input type="radio" name="jwb2" value="1"> Buruk
                                <input type="radio" name="jwb2" value="2"> Cukup 
                                <input type="radio" name="jwb2" value="3"> Baik
                                <input type="radio" name="jwb2" value="4"> Sangat Baik
                              </div>
                          </div>
                          <div class="form-group">
                             
                              <div class="col-lg-7">
                                <h4>Kecepatan Pelayanan ?</h4>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-lg-6">
                                 <input type="radio" name="jw3" value="0"> Sangat Buruk
                                <input type="radio" name="jwb3" value="1"> Buruk
                                <input type="radio" name="jwb3" value="2"> Cukup 
                                <input type="radio" name="jwb3" value="3"> Baik
                                <input type="radio" name="jwb3" value="4"> Sangat Baik
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kritik dan Saran</label>
                              <div class="col-sm-10">
                                  <textarea name="saran" class="form-control" rows="5"></textarea>
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