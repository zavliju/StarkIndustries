<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ url('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>
              <?php 
                if(Session::has('pelanggan')) echo(Session::get('pelanggan'));
                else if(Session::has('admininv')) echo(Session::get('admininv'));
                else if(Session::has('direksi')) echo(Session::get('direksi'));
              ?>
              </p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php if(Session::has('pelanggan')){ ?>
            <li><a href="{{ url('pelanggan') }}"><i class="fa fa-dashboard"></i> <span>View Pemesanan</span></a></li>
            <li><a href="{{ url('/pelanggan/index-input') }}"><i class="fa fa-th"></i> Input Pemesanan</a></li>
            <?php } ?>
            <?php if(Session::has('admininv')){ ?>
            <li><a href="{{ url('admininv') }}"><i class="fa fa-dashboard"></i> <span>ACC Pesanan</span></a></li>
            <li><a href="{{ url('/admininv/index-senjata') }}"><i class="fa fa-th"></i>Lihat Senjata</a></li>
            <li><a href="{{ url('/admininv/index-input-senjata') }}"><i class="fa fa-th"></i>Input Senjata</a></li>
            <li><a href="{{ url('/admininv/index-laporan') }}"><i class="fa fa-th"></i>Lihat Laporan</a></li>
            <li><a href="{{ url('/admininv/index-input-laporan') }}"><i class="fa fa-th"></i>Input Laporan</a></li>
            <?php } ?>
            <?php if(Session::has('direksi')){ ?>
            <li><a href="{{ url('direksi') }}"><i class="fa fa-dashboard"></i> <span>ACC Laporan</span></a></li>
            <?php } ?>
            
           
            <li class="header"></li>
            <li><a href="{{ url('login/logout') }}"><i class="fa fa-circle-o text-danger"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>