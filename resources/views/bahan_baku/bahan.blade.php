 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Bahan Baku</h3>
                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped" id="test" cellspacing="0">
                                @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                               @endif
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nama Bahan Baku</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Stok</th>
                                  <th><i class="fa fa-bookmark"></i> Tanggal Masuk</th>
                                  <th><i class="fa fa-bookmark"></i> Tanggal Kadaluarsa</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($bahan as $data)
                              <tr>
                                  <td><a >{{$data->nama_bahan}}</a></td>
                                  <td >{{$data->stok}}</td>
                                  <td>{{$data->tgl_masuk}}</td>
                                  <td>{{$data->tgl_kadaluarsa}}</td>
                                  <td>
                                       <a href="{{url('/pantry/bahan/edit')}}/{{$data->id_bahan}}">
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      </a>
                                       <a href="{{url('/pantry/bahan/hapus')}}/{{$data->id_bahan}}">
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      </a>
                                  </td>
                              </tr>
                             @endforeach
                          
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->  
@stop                 