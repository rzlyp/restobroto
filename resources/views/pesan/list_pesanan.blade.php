 @extends('dashboard')
    @section('content')
    <div class="col-lg-9 main-chart">
        <h2>Daftar Pesanan Pelanggan</h2>
    <div class="row mtbox">
                     @foreach($meja as $data)
                        <a href="{{url('/pelayan/pesanan')}}/{{$data->no_meja}}/{{$data->no_transaksi}}">    
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_stack"></span>
                                <h3>{{$data->no_meja}}</h3>
                                {{$data->status}}
                            </div>
                                 
                        </div>
                        </a>
                       @endforeach 
                        
                        
                    
     </div><!-- /row mt -->  
     </div>
     <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                        <h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div id="notif"></div>

                       
                       
                      
                  </div><!-- /col-lg-3 -->
                  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
  <script id="source" language="javascript" type="text/javascript">

  $(function(){
         meja();
   });          
  function meja() 
  {
    
    $.ajax({                                      
      url: '{{url('/koki/notif')}}',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var item = data[0];
        console.log(data);
        $('#notif').empty("<a href='{{url('/koki/pesanan/"+item.no_meja+"/"+item.no_transaksi+"')}}'><div class='col-md-2 col-sm-2 col-md-offset-1 box0'><div class=box1><span class=li_stack></span><h3>"+item.no_meja+"</h3></div></div></a>"); 
        for (var i = 0; i < data.length; i++) {
            var item = data[i];
            $('#notif').append("<div class='desc'><div class='thumb'><span class='badge bg-theme'><i class='fa fa-clock-o'></i></span> </div><div class='details'><a href='#''>Koki :</a> Meja "+item.no_meja+" ,pesanan sudah selesai<br/></p></div></div>"); 
        }
        setTimeout(meja, 1000); 
      } 
    });
  }
  

  </script>
     
@stop   