<header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(url('/')); ?>" class="logo"><b>Stark</b>Industries</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo e(url('assets/dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo e(Session::get('pelanggan')); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo e(url('assets/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php 
                        if(Session::has('pelanggan')) echo(Session::get('pelanggan'));
                        else if(Session::has('admininv')) echo(Session::get('admininv'));
                        else if(Session::has('direksi')) echo(Session::get('direksi'));
                      ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="<?php echo e(URL::to('login/logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>