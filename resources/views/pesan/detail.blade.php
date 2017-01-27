 @extends('dashboard')
    @section('content')

	<div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Detail Pesanan</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              
		                              <th>Makanan/Minuman</th>
		                              <th>Jumlah</th>
		                              <th>Harga</th>
		                          </tr>
		                          </thead>
		                          <tbody>

		                          @foreach($pesanan as $data)
                              <tr>
                                  <td><a>{{$data->nama_menu}}</a></td>
                                  <td>{{$data->jumlah}}</td>
                                  <td>{{$data->subtotal}}</td>
                                  
                              </tr>
                             @endforeach
		                          <tr>
		                          <td></td>
		                          	<td ><b>Total</b></td>
		                          	<td>{{$totals->total}}</td>
		                          </tr>
		                          
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->

	                    <!-- Modal -->
		            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class="modal-content">
		                  <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                    <h4 class="modal-title" id="myModalLabel">Kembalian</h4>
		                  </div>
		                  <div class="modal-body">
		                    <div class="form-group">
		                     <h3>Rp. 40000</h3>
		                    </div>
		                  </div>
		                  <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                    
		                  </div>
		                </div>
		              </div>
		            </div>  
	                  @stop   