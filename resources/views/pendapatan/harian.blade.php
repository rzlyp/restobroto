 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Laporan Harian</h3>

                 
                   
                  <div class="col-md-12">
                 
                      <div class="content-panel">
                        <form class="" action="{{url('/kasir/pendapatan/cari/')}}" method="post">
                         <table class="table">
                             <tr>
                               <td>
                                 <div class="col-md-4">
                                   <input type="date" name="tanggal" value="" class="form-control">
                                 </div>
                                 <button type="submit" name="button" class="btn">Cari</button>
                                </td>
                                <td>
                                    <h3>Total : {{$total}}</h3>
                                </td>
                             </tr>

                         </table>
                        </form>
                          <table class="table table-striped" id="test">
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Tanggal</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah Pendapatan</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($hari as $data)
                              <tr>
                                  <td>{{$data->tgl_pesanan}}</td>
                                  <td class="hidden-phone">{{$data->total}}</td>
                                 
                              </tr>
                             @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->  
@stop                 