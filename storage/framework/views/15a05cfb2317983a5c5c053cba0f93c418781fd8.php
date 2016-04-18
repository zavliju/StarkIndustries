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
                  
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Pemesanan ID</th>
                        <th>Senjata ID</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pemesanan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($pemesanans)){ foreach($pemesanans as $pemesanan){ ?>
                    <form role="form" action="<?php echo e(url('/admininv/create-acc-pesanan')); ?>" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="id" value="<?php echo e($pemesanan->id); ?>">  
                      <tr>
                        <td><?php echo e($pemesanan->id); ?></td>
                        <td><?php echo e($pemesanan->senjataID); ?></td>
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
                        <td>
                          <button type="submit" value="ACC" name="isBought" class="btn btn-success">ACC</button>
                          <button type="submit" value="Tolak" name="isBought" class="btn btn-danger">Tolak</button>
                        </td>
                      </tr>
                    </form>
                    <?php }} ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Pemesanan ID</th>
                        <th>Senjata ID</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pemesanan</th>
                        <th>Action</th>
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