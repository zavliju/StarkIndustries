<?php $__env->startSection('content'); ?>
<body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>"><b>Stark</b>Industries</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masuk sebagai pelanggan</p>
        <form action="<?php echo e(url('/login/is-login')); ?>" method="post">
          <div class="form-group has-feedback">
            <input name="email" type="text" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.loginDefault', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>