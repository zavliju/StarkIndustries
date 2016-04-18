<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Senjata</h3>
                  <div class="col-md-2 col-md-offset-10">
                    <a href="<?php echo e(url('/admininv/index-input-senjata')); ?>" ><button type="submit"class="btn btn-primary btn-block btn-flat">Input senjata baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Senjata ID</th>
                        <th>Jenis</th>
                        <th>Sudah Diperbaiki</th>
                        <th>Sedang Rusak</th>
                        <th>Stok</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($senjatas)){ foreach($senjatas as $senjata){ ?>
                      <tr>
                        <td><?php echo e($senjata->id); ?></td>
                        <td><?php echo e($senjata->jenis); ?></td>
                        <td><?php echo e($senjata->isRepaired); ?></td>
                        <td><?php echo e($senjata->isDamaged); ?></td>
                        <td><?php echo e($senjata->stok); ?></td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Senjata ID</th>
                        <th>Jenis</th>
                        <th>Sudah Diperbaiki</th>
                        <th>Sedang Rusak</th>
                        <th>Stok</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>