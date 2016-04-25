@extends('layouts.default')
@section('content')
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
                    <h3 class="box-title">Perbaikan</h3>
                  <div class="col-md-2 col-md-offset-10">
                    
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Perbaikan ID</th>
                        <th>Petugas ID</th>
                        <th>Aset ID</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($perbaikans)){ foreach($perbaikans as $perbaikan){ ?>
                      <tr>
                        <td><input type="hidden" name="id" value="{{ $perbaikan->id }}">{{ $perbaikan->id }}</td>
                        <td>{{ $perbaikan->id_petugas }}</td>
                        <td>{{ $perbaikan->id_aset }}</td>
                        <td>{{ $perbaikan->created_at }}</td>
                        <td>
                          <?php if($perbaikan->status == 2){ ?>
                            <span class="label label-warning">Dalam Perbaikan</span>
                          <?php }else if($perbaikan->status == 1){ ?>
                            <span class="label label-success">Kondisi Baik</span>
                          <?php }else if($perbaikan->status == 0){ ?>
                            <span class="label label-danger">Masih Rusak</span>
                          <?php }else{ ?>
                            <span class="label label-danger">Dibuang</span>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php }} ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Perbaikan ID</th>
                        <th>Petugas ID</th>
                        <th>Aset ID</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @stop