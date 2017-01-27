 @extends('dashboard')
    @section('content')
    <div class="col-lg-9 main-chart">
    <div class="row mtbox">
                    @if($status === 'koki')
                        <a href="{{url('/koki/meja/menu')}}">
                    @elseif($status === 'kasir')
                        <a href="{{url('/kasir/meja/pesanan')}}">
                    @else
                        <a href="{{url('/meja/menu')}}">    
                    @endif    
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>01</h3>
                            </div>
                                 
                        </div>
                        </a>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>02</h3>
                            </div>
                                 
                        </div>
                        
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>03</h3>
                                Booked
                            </div>
                               
                        </div>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>04</h3>
                                Booked
                            </div>
                                 
                        </div>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>05</h3>
                            </div>
                                 
                        </div>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>06</h3>
                            </div>
                                 
                        </div>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>07</h3>
                            </div>
                                 
                        </div>
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>08</h3>
                            </div>
                                 
                        </div>
                        
                    
     </div><!-- /row mt -->  
     </div>

     @include('partials.rightbar')   
     
@stop   