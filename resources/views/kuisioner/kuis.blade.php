 @extends('dashboard')
    @section('content') 
                    <h3><i class="fa fa-angle-right"></i> Kuisioner</h3>
                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <form class="" action="{{url('/customer/kuesioner/cari')}}" method="post">
                         <table class="table">
                             <tr>
                               <td>
                                 <div class="col-md-4">
                                   <input type="date" name="tanggal" value="" class="form-control">
                                 </div>
                                 <button type="submit" name="button" class="btn">Cari</button>
                                </td>
                                
                             </tr>

                         </table>
                        </form>
                          <table class="table table-striped table-advance table-hover">
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Pertanyaan</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tanggal Kuisioner</th>
                                  <th>Nilai</th>
                                  <th>Keterangan</th>
                              </tr>
                              </thead>
                              <tbody>
                              @if($jwb1 === null)
                                <tr>
                                  <td colspan="4"><h4>Kuesioner Kosong</h4></td>
                                </tr>
                              @else
                                <tr>
                                  <td>Pelayanan</td>
                                  
                                  <td>{{$tgl}}</td>
                                  <td>{{$jwb1}}</td>
                                  <td>
                                      @if($jwb1 <= 2)
                                        Buruk
                                      @elseif($jwb1 === 3)
                                        Cukup
                                       @elseif($jwb1 === 4)
                                        Baik
                                       @else
                                        Sangat Baik
                                       @endif      
                                  </td>
                                 
                              </tr>
                              <tr>
                                  <td>Kualitas Makanan</td>
                                  
                                  <td>{{$tgl}}</td>
                                  <td>{{$jwb2}}</td>
                                  <td>
                                      @if($jwb2 <= 2)
                                        Buruk
                                      @elseif($jwb2 < 4)
                                        Cukup
                                       @elseif($jwb2 < 5)
                                        Baik
                                       @else
                                        Sangat Baik
                                       @endif      
                                  </td>
                                 
                              </tr>
                              <tr>
                                  <td>Kecepatan Pelayanan</td>
                                  
                                  <td>{{$tgl}}</td>
                                  <td>{{$jwb3}}</td>
                                  <td>
                                      @if($jwb3 <= 2)
                                        Buruk
                                      @elseif($jwb3 < 4)
                                        Cukup
                                       @elseif($jwb3 < 5)
                                        Baik
                                       @else
                                        Sangat Baik
                                       @endif      
                                  </td>
                                 
                              </tr>
                              @endif
                              </tbody>
                          </table>
                         
                      </div><!-- /content-panel -->
                      <div class="content-panel">
                        <h4>Kritik dan Saran Tanggal {{$tgl}} </h4>
                         <table class="table table-striped table-advance table-hover" id="test">
                           @if($jwb1 === null)
                                <tr>
                                  <td colspan="4"><h4>Kuesioner Kosong</h4></td>
                                </tr>
                              @else
                            @foreach($saran as $saran)
                            <tr>
                              <td>{{$saran->kritik_saran}}</td>
                            </tr>
                            @endforeach
                          @endif  
                          </table>
                      </div>
                  </div><!-- /col-md-12 -->  
@stop                 