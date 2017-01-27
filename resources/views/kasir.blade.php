 @extends('dashboard')
    @section('content')
    <div class="col-lg-9 main-chart">
        <h2>Daftar Pesanan Pelanggan</h2>
    <div class="row mtbox">
                     @foreach($meja as $data)
                        <a href="{{url('/kasir/pesanan')}}/{{$data->no_meja}}/{{$data->no_transaksi}}">    
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>{{$data->no_meja}}</h3>
                            </div>
                                 
                        </div>
                        </a>
                       @endforeach 
                        
                        
                    
     </div><!-- /row mt -->  
     </div>  
     
@stop   