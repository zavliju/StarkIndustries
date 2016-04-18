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
                    <h3 class="box-title">Cuti</h3>
                  <div class="col-md-2 col-md-offset-10">
                    <a href="<?php echo e(url('/cuti/index-input')); ?>" ><button type="submit"class="btn btn-primary btn-block btn-flat">Ajukan Cuti Baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Cuti ID</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Alasan</th>
                        <th>Catatan</th>
                        <th>Approved</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($cutis)){ foreach($cutis as $cuti){ ?>
                      <tr>
                        <td><?php echo e($cuti->cutiID); ?></td>
                        <td><?php echo e($cuti->tglMulai); ?></td>
                        <td><?php echo e($cuti->tglSelesai); ?></td>
                        <td><?php echo e($cuti->alasan); ?></td>
                        <td><?php echo e(isset($cuti->catatan)?$cuti->catatan:"Belum ada catatan dari HRD"); ?></td>
                        <td>
                          <?php if(!isset($cuti->isApproved)){ ?>
                            <span class="label label-warning">Pending</span>
                            <?php }else{ ?>
                          <?php if($cuti->isApproved){ ?>
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
                        <th>Cuti ID</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Alasan</th>
                        <th>Catatan</th>
                        <th>Approved</th>
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