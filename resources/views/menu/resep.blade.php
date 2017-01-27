 @extends('dashboard')
    @section('content') 
    @foreach($menu as $menu)

          <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Kelola Resep {{$menu->nama_menu}}</h3>
                  <div class="tab-pane" id="chartjs">
                  <div class="row mt">
                      <div class="col-lg-5">
                          <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Bahan</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" id="test" cellspacing="0">
                               
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nama Bahan Baku</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Stok</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($bahan as $data)
                              <tr>
                                  <td><a >{{$data->nama_bahan}}</a></td>
                                  <td >{{$data->stok}}</td>
                                  <td>
                                     
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#set{{$data->id_bahan}}"><i class="fa fa-check"></i></button>
                
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
                            <h4><i class="fa fa-angle-right"></i> Resep</h4>
                              <div class="panel-body text-center">
                                  <table class="table table-striped" cellspacing="0">
                               
                                      <thead>
                                      <tr>
                                          <th><i class="fa fa-bullhorn"></i> Bahan </th>
                                          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($resep as $data)
                                      <tr>
                                          <td><a >{{$data->nama_bahan}}</a></td>
                                          <td >{{$data->jumlah}}</td>
                                          
                                      </tr>
                                     @endforeach
                                  
                                      </tbody>
                             </table>
                               <div class="form-group">
                             <a href="{{url('/koki/menu/')}}"><button class="btn btn-info">Simpan</button></a>
                             </div>
                          </div>
                            </div>

                      </div>
                  </div>
                 </div> 

                  @foreach ($bahan as $z)
                                <div class="modal fade modal-success" id="set{{$z->id_bahan}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <form method="post" action="{{url('/koki/menu/resep')}}">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">{{$z->nama_bahan}}</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        
                                                       <div class="form-group">
                                                         <input type="text" name="jumlah" placeholder="Jumlah" class="form-control">
                                                       </div>
                                                        <input type="hidden" name="id_menu" value="{{$menu->id_menu}}">
                                                         <input type="hidden" name="id_bahan" value="{{$z->id_bahan}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
                                                    </div>
                                                   </form>
                                                </div>
                                            </div>
                                        </div>  
                          </section>              
                    @endforeach    
     @endforeach              
@stop                 