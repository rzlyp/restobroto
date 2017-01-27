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
		                          <tr>
		                          	<td><b>Bayar</b></td>
		                          	<td>
		                          	<input type="hidden" name="kembali" id="total" value="{{$totals->total}}">
		                          		<input type="text" name="kembali" id="kembali" class="form-control" >
		                          	</td>
		                          	<td>
		                          		<button class="btn btn-info" onclick="kembali()">Hitung</button>
		                          	</td>
		                          </tr>
		                          <tr>
		                          	<td><b>Kembali</b></td>
		                          	<td><div id="kembalian"></div></td>
		                          	<td><a href="{{url('/kasir/pesanan/meja')}}/{{$no}}/selesai">
		                          			<button class="btn btn-success">Selesai</button>
		                          		</a></td>
		                          </tr>
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
	                  <script type="text/javascript">
	                  	
		                  function kembali(){
		                  	var total = document.getElementById('total').value;
		                  	var kembali = document.getElementById('kembali').value;
		                  	kembali = kembali -total;
		                  	console.log(kembali);
		                  	document.getElementById('kembalian').innerHTML = kembali;

		                  }	
	                  </script>
 	
	                  @stop   