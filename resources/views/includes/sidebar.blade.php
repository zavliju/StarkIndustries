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
                if(Session::has('petugas')) echo(Session::get('petugas'));
              ?>
              </p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php if(Session::has('petugas')){ ?>
            <li><a href="{{ url('petugas') }}"><i class="fa fa-dashboard"></i> <span>Lihat Aset</span></a></li>
            <li><a href="{{ url('/petugas/index-input') }}"><i class="fa fa-th"></i> Input Aset</a></li>
            <li><a href="{{ url('petugas/index-perbaikan') }}"><i class="fa fa-dashboard"></i> <span>Lihat Perbaikan</span></a></li>
            <?php } ?>
            
           
            <li class="header"></li>
            <li><a href="{{ url('login/logout') }}"><i class="fa fa-circle-o text-danger"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>