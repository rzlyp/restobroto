@include('partials.head')     
<section id="container" >
            @include('partials.header')
            @include('partials.sidebar')
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  
                        @yield('content')
                          
                 
                  
                  
                       
               
                  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>
@include('partials.foot')  