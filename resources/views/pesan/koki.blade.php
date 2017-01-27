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
		                              <th>Kategori</th>
		                              <th>Jumlah</th>
		                          </tr>
		                          </thead>
		                          <tbody>

		                          @foreach($pesanan as $data)
                              <tr>
                                  <td><a>{{$data->nama_menu}}</a></td>
                                  <td>{{$data->kategori}}</td>
                                  <td>{{$data->jumlah}}</td>
                                  
                              </tr>
                             @endforeach
		                         
		                          
		                          </tbody>
		                      </table>
		                      <table>
		                      	<tr>
		                      		<td>
		                      			<form method="post" action="/koki/pesanan/done">
		                      				<div class="form-group">
		                      					<input type="hidden" name="no_pesanan" value="{{$no}}">

		                      					<input type="hidden" name="no_meja" value="{{$id}}">
		                      					<input type="submit" value="SELESAI" class="btn btn-info">
		                      				</div>
		                      			</form>
		                      		</td>
		                      	</tr>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
 
	                  @stop   