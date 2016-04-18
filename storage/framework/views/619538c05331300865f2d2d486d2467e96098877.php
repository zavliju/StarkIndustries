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
                  <h3 class="box-title">Form Pemesanan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo e(url('pelanggan/create')); ?>">
                  <div class="box-body">
                  <div class="form-group">
                      <label>Pilih senjata</label>
                      <select class="form-control">
                      <?php if(isset($senjatas)){ foreach($senjatas as $senjata){ ?>
                        <option name="senjata" value="<?php echo e($senjata->id); ?>"><?php echo e($senjata->jenis); ?></option>
                      <?php }} ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Pesan</label>
                      <input type="date" class="form-control" id="exampleInputPassword1" name="tglPesan">
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