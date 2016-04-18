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
                    <h3 class="box-title">Lembur</h3>
                  <div class="col-md-2 col-md-offset-10">
                    <a href="<?php echo e(url('/lembur/index-input')); ?>" ><button type="submit"class="btn btn-primary btn-block btn-flat">Ajukan Lembur Baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Lembur ID</th>
                        <th>Tanggal</th>
                        <th>Waktu Pulang</th>
                        <th>Alasan</th>
                        <th>Catatan</th>
                        <th>Approved</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>21 Maret 2016</td>
                        <td>21.00</td>
                        <td>Deadline</td>
                        <td>Sibuk</td>
                        <td>Yes</td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>23 Maret 2016</td>
                        <td>23.00</td>
                        <td>Deadline</td>
                        <td>Sibuk</td>
                        <td>No</td>
                      </tr>
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