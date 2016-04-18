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
                    <a href="<?php echo e(url('/pelanggan/index-input')); ?>" ><button type="submit"class="btn btn-primary btn-block btn-flat">Pesan senjata baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Senjata ID</th>
                        <th>Admin ID</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pemesanan</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($pemesanans)){ foreach($pemesanans as $pemesanan){ ?>
                      <tr>
                        <td><?php echo e($pemesanan->senjataID); ?></td>
                        <td>
                          <?php if(!isset($pemesanan->adminID)){ ?>
                            <span class="label label-warning">Pending</span>
                          <?php }else{ ?>
                            <?php echo e($pemesanan->adminID); ?>

                          <?php } ?>
                        </td>
                        <td><?php echo e($pemesanan->tglPesan); ?></td>
                        <td>
                          <?php if(!isset($pemesanan->isBought)){ ?>
                            <span class="label label-warning">Pending</span>
                            <?php }else{ ?>
                          <?php if($pemesanan->isBought){ ?>
                            <span class="label label-success">Diterima</span>
                          <?php }else{ ?>
                            <span class="label label-danger">Ditolak</span>
                          <?php }} ?>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Senjata ID</th>
                        <th>Admin ID</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pemesanan</th>
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