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
                    <h3 class="box-title">Laporan</h3>
                  <div class="col-md-2 col-md-offset-10">
                    <a href="<?php echo e(url('/pelanggan/index-input-laporan')); ?>" ><button type="submit"class="btn btn-primary btn-block btn-flat">Input laporan baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Laporan ID</th>
                        <th>Admin ID</th>
                        <th>Isi Laporan</th>
                        <th>Diterima</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($laporans)){ foreach($laporans as $laporan){ ?>
                      <tr>
                        <td><?php echo e($laporan->id); ?></td>
                        <td><?php echo e($laporan->adminID); ?></td>
                        <td><?php echo e($laporan->laporan); ?></td>
                        <td>
                          <?php if(!isset($laporan->isAccepted)){ ?>
                            <span class="label label-warning">Pending</span>
                            <?php }else{ ?>
                          <?php if($pemesanan->isAccepted){ ?>
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