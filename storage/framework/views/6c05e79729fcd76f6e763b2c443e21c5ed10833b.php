<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo e(url('assets/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo e(url('berita')); ?>">
                <i class="fa fa-dashboard"></i> <span>Berita</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo e(url('cuti')); ?>">
                <i class="fa fa-files-o"></i>
                <span>Cuti</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/cuti')); ?>"><i class="fa fa-circle-o"></i> View Cuti</a></li>
                <li><a href="<?php echo e(url('/cuti/index-input')); ?>"><i class="fa fa-circle-o"></i> Input Cuti</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo e(url('lembur')); ?>">
                <i class="fa fa-th"></i> <span>Lembur</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/lembur')); ?>"><i class="fa fa-circle-o"></i> View Lembur</a></li>
                <li><a href="<?php echo e(url('/lembur/index-input')); ?>"><i class="fa fa-circle-o"></i> Input Lembur</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?php echo e(url('gaji')); ?>">
                <i class="fa fa-pie-chart"></i>
                <span>Lihat Gaji</span>
              </a>
            </li>
           
            <li class="header"></li>
            <li><a href="<?php echo e(url('login/logout')); ?>"><i class="fa fa-circle-o text-danger"></i> Logout</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>