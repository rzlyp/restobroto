 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Daftar Menu</h3>
                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped" id="test">
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Menu</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Harga</th>
                                  <th><i class="fa fa-bookmark"></i> Kategori</th>
                                  
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($menu as $data)
                              <tr>
                                  <td>{{$data->nama_menu}}</td>
                                  <td class="hidden-phone">{{$data->harga}}</td>
                                  <td>{{$data->kategori}}</td>
                                  
                                  <td>
                                      <a href="{{url('/koki/menu/detail')}}/{{$data->id_menu}}">
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      </a>
                                      <a href="{{url('/koki/menu/edit')}}/{{$data->id_menu}}">
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      </a>
                                       <a href="{{url('/koki/menu/hapus')}}/{{$data->id_menu}}">
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