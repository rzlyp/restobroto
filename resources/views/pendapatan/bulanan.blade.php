 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Laporan Bulanan</h3>
                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped" id="test">
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Bulan</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jumlah Pendapatan</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($bulan as $data)
                              <tr>
                                  <td>{{$data->month}} {{$data->year}}</td>
                                  <td class="hidden-phone">{{$data->total}}</td>
                                 
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->  
@stop                 