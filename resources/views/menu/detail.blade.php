 @extends('dashboard')
    @section('content')

                    @foreach($menu as $menu) 
                    <h3><i class="fa fa-angle-right"></i> {{$menu->nama_menu}}</h3>
                    @endforeach
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped" cellspacing="0">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nama Bahan</th>
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
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->  
@stop                 