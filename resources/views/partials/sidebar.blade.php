<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="{{url('assets/img/jk.jpg')}}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{Auth::user()->nama}}</h5>
              	  <h6 class="centered" style="color:white">{{Auth::user()->role}}</h6>

                  @if(Auth::user()->role === 'Pelayan')
                  <li class="mt">
                      <a class="active" href="{{url('/pelayan')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                    <li>
                      <a href="{{url('/pesanan/list')}}">
                          <i class="fa fa-tasks"></i>
                          <span>Data Pesanan</span>
                      </a>
                  </li>
                  @elseif(Auth::user()->role === 'Koki')
                  <li class="mt">
                      <a class="active" href="{{url('/koki')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/koki/menu/tambah')}}">Tambah</a></li>
                          <li><a  href="{{url('/koki/menu')}}">Manage</a></li>

                      </ul>
                  </li>
                @elseif(Auth::user()->role === 'Kasir')
                <li class="mt">
                      <a class="active" href="{{url('/kasir')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Laporan Pendapatan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/kasir/pendapatan/harian')}}">Harian</a></li>
                          <li><a  href="{{url('/kasir/pendapatan/bulanan')}}">Bulanan</a></li>
                          <li><a  href="{{url('/kasir/pendapatan/tahunan')}}">Tahunan</a></li>
                      </ul>
                  </li>
                  @elseif(Auth::user()->role === 'Pantry')
                  <li class="mt">
                      <a class="active" href="{{url('/pantry')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/pantry/bahan/tambah')}}" >
                          <i class="fa fa-desktop"></i>
                          <span>Tambah Bahan Baku</span>
                      </a>

                  </li>
                  @elseif(Auth::user()->role === 'CS')
                  <li class="mt">
                      <a class="active" href="{{url('/customer')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('/customer/kuisioner/tambah')}}" >
                          <i class="fa fa-desktop"></i>
                          <span>Tambah Kuisioner</span>
                      </a>

                  </li>
                @elseif(Auth::user()->role === 'Admin')
                <li class="mt">
                      <a class="active" href="{{url('/admin')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Pegawai</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/pegawai/tambah')}}">Tambah</a></li>
                          <li><a  href="{{url('/admin/pegawai/list')}}">Manage</a></li>
                      </ul>
                  </li>  
                @endif
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
