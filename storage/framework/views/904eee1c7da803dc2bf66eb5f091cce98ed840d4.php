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
                  <h3 class="box-title">Gaji</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Gaji ID</th>
                        <th>Tanggal Gaji</th>
                        <th>Tanggal Konfirmasi</th>
                        <th>Jumlah Gaji</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>23 Maret 2016</td>
                        <td>23 Maret 2016</td>
                        <td>400000</td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>23 April 2016</td>
                        <td>23 April 2016</td>
                        <td>400000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Gaji ID</th>
                        <th>Tanggal Gaji</th>
                        <th>Tanggal Konfirmasi</th>
                        <th>Jumlah Gaji</th>
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