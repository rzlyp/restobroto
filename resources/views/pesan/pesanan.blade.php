 @extends('dashboard')
    @section('content')                     

    <h3><i class="fa fa-angle-right"></i> Daftar Pesanan</h3>
                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Menu Makanan</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Makanan</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah</th>
                                  
                                 
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="basic_table.html#">Iga Bakar</a></td>
                                  <td class="hidden-phone">2</td>
                                  
                              </tr>
                              
                              
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->


                 <div class="col-md-12 mt">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Menu Minuman</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Minuman</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah</th>
                                 
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="basic_table.html#">Lemon Tea</a></td>
                                  <td class="hidden-phone">1</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check">Pilih</i></button>
                                      
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="basic_table.html#">Lemonade</a></td>
                                  <td class="hidden-phone">1</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check">Pilih</i></button>
                                      
                                  </td>
                              </tr>
                              <

                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                    </div>  
                    <div class="col-md-12 mt">
                                       <a href="{{url('/koki')}}"><button class="btn btn-success">Selesai</button></a>
                    </div>
                <!-- Modal -->
         
@stop