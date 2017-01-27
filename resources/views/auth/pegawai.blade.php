 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Daftar Pegawai</h3>

                 
                   
                  <div class="col-md-12">
                 
                      <div class="content-panel">
                        
                          <table class="table table-striped" id="test">
                             @if (Session::has('success'))
                                      <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                               @endif
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nama Pegawai</th>
                                  <th ><i class="fa fa-question-circle"></i> Alamat</th>
                                  <th>No. Telp</th>
                                  <th>Username</th>
                                  <th></th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($pegawai as $data)
                              <tr>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->no_telp}}</td>
                                <td>{{$data->username}}</td>
                               <td>
                                      <a href="{{url('/admin/pegawai/edit')}}/{{$data->id}}">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      </a>
                                      <a href="{{url('/admin/pegawai/hapus')}}/{{$data->id}}">
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