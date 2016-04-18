<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Form Input Senjata</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo e(url('admininv/create-senjata')); ?>">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Senjata</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="jenis">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Stok</label>
                      <input type="number" class="form-control" id="exampleInputPassword1" name="stok">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="isDamaged" type="checkbox"> Senjata Rusak
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="isRepaired" type="checkbox"> Senjata Sudah Diperbaiki
                      </label>
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>