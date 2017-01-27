 @extends('dashboard')
    @section('content') 
          <section class="wrapper">
          @foreach($mejas as $mj)
                    <h3><i class="fa fa-angle-right"></i> Meja {{$mj->no_meja}}</h3>
                  <div class="tab-pane" id="chartjs">
                  <div class="row mt">
                      <div class="col-lg-5">
                          <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Makanan Pembuka</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" cellspacing="0">
                               
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nama Menu</th>
                                  <th>Harga</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($pembuka as $data)
                              <tr>
                                  <td><a>{{$data->nama_menu}}</a></td>
                                  <td>{{$data->harga}}</td>
                                  <td>
                                     
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#set{{$data->id_menu}}"><i class="fa fa-check"></i></button>
                
                                  </td>
                              </tr>
                             @endforeach
                          
                              </tbody>
                          </table>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Makanan Penutup</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" cellspacing="0">
                               
                                      <thead>
                                      <tr>
                                          <th><i class="fa fa-bullhorn"></i> Nama  </th>
                                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Harga</th>
                                          <th></th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($penutup as $data)
                                      <tr>
                                          <td><a >{{$data->nama_menu}}</a></td>
                                          <td >{{$data->jumlah}}</td>
                                          <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#penutup{{$data->id_menu}}"><i class="fa fa-check"></i></button></td>
                                      </tr>
                                     @endforeach
                                  
                                      </tbody>
                             </table>
                               <div class="form-group">
                             </div>
                          </div>
                            </div>

                      </div>
                  </div>
                  <div class="row mt">
                      <div class="col-lg-5">
                          <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Minuman</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" cellspacing="0">
                               
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nama Menu</th>
                                  <th>Harga</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($minuman as $data)
                              <tr>
                                  <td><a>{{$data->nama_menu}}</a></td>
                                  <td>{{$data->harga}}</td>
                                  <td>
                                     <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#minum{{$data->id_menu}}"><i class="fa fa-check"></i></button>
                                      
                
                                  </td>
                              </tr>
                             @endforeach
                          
                              </tbody>
                          </table>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-5">
                          <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Pesanan Pelanggan</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" cellspacing="0">
                               
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Nama Menu</th>
                                  <th>Jumlah</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($pesanan as $data)
                              <tr>
                                  <td><a>{{$data->nama_menu}}</a></td>
                                  <td>{{$data->jumlah}}</td>
                                  <td>
                                     <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$data->id_menu}}"><i class="fa fa-trash-o"></i></button>
                                      
                
                                  </td>
                              </tr>
                             @endforeach
                          
                              </tbody>
                          </table>
                            <div class="form-group">
                              <form action="{{url('/pelayan/pesanan/done')}}" method="post">
                                 <input type="hidden" name="no_meja" value="{{$mj->no_meja}}">
                                 <input type="hidden" name="no_pesanan" value="{{$mj->no_transaksi}}">
                              <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
                              </form>

                            </div>
                              </div>
                          </div>
                      </div>
                  </div>
                 </div> 
</section>   

                  @foreach ($pembuka as $z)
                                <div class="modal fade modal-success" id="set{{$z->id_menu}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form method="post" action="{{url('/pelayan/meja/pesanan')}}">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">{{$z->nama_menu}}</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        
                                                       <div class="form-group">
                                                         <input type="text" name="jumlah" placeholder="Jumlah" class="form-control">
                                                       </div>
                                                        <input type="hidden" name="no_meja" value="{{$mj->no_meja}}">
                                                         <input type="hidden" name="no_pesanan" value="{{$mj->no_transaksi}}">
                                                         <input type="hidden" name="id_menu" value="{{$z->id_menu}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>  

                                     
                    @endforeach    
                     @foreach ($penutup as $z)
                                <div class="modal fade modal-success" id="penutup{{$z->id_menu}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form method="post" action="{{url('/pelayan/meja/pesanan')}}">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">{{$z->nama_menu}}</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        
                                                       <div class="form-group">
                                                         <input type="text" name="jumlah" placeholder="Jumlah" class="form-control">
                                                       </div>
                                                       <input type="hidden" name="id_menu" value="{{$z->id_menu}}">
                                                        <input type="hidden" name="no_meja" value="{{$mj->no_meja}}">
                                                         <input type="hidden" name="no_pesanan" value="{{$mj->no_transaksi}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>  

                                     
                    @endforeach    
                     @foreach ($minuman as $z)
                                <div class="modal fade modal-success" id="minum{{$z->id_menu}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form method="post" action="{{url('/pelayan/meja/pesanan')}}">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">{{$z->nama_menu}}</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        
                                                       <div class="form-group">
                                                         <input type="text" name="jumlah" placeholder="Jumlah" class="form-control">
                                                       </div>
                                                        <input type="hidden" name="no_meja" value="{{$mj->no_meja}}">
                                                         <input type="hidden" name="no_pesanan" value="{{$mj->no_transaksi}}">
                                                         <input type="hidden" name="id_menu" value="{{$z->id_menu}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>  

                                     
                    @endforeach    
                     @foreach ($pesanan as $z)
                                <div class="modal fade modal-danger" id="hapus{{$z->id_menu}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form method="post" action="{{url('/pelayan/meja/pesanan/hapus')}}">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Hapus</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                          <h4>Hapus {{$z->nama_menu}} ?</h4>
                                                        </div>
                                                        <input type="hidden" name="no_meja" value="{{$mj->no_meja}}">
                                                         <input type="hidden" name="no_pesanan" value="{{$mj->no_transaksi}}">
                                                         <input type="hidden" name="id_menu" value="{{$z->id_menu}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="simpan" value="Hapus" class="btn btn-danger">
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>                      
                    @endforeach    
               @endforeach     

              
@stop                 