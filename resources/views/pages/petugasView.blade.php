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
                    <h3 class="box-title">Aset</h3>
                  <div class="col-md-2 col-md-offset-10">
                    <a href="{{ url('/petugas/index-input') }}" ><button type="submit"class="btn btn-primary btn-block btn-flat">Input aset baru</button></a>
                  </div><!-- /.col -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Aset ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Status Aset</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($asets)){ foreach($asets as $aset){ ?>
                    <form role="form" action="{{ url('/petugas/create-perbaikan') }}" method="post">
                      <tr>
                        <td><input type="hidden" name="id" value="{{ $aset->id }}">{{ $aset->id }}</td>
                        <td>{{ $aset->nama }}</td>
                        <td>{{ $aset->jenis }}</td>
                        <td>
                          <?php if(($aset->status) == '2'){ ?>
                            <span class="label label-warning">Dalam Perbaikan</span>
                          <?php }else if($aset->status == '1'){ ?>
                            <span class="label label-success">Kondisi Baik</span>
                          <?php }else{ ?>
                            <span class="label label-danger">Rusak</span>
                          <?php } ?>
                        </td>

                        <td>
                          <?php if($aset->status == '2'){ ?>
                          <button type="submit" value="1" name="status" class="btn btn-success">Selesai Perbaiki</button>
                          <button type="submit" value="0" name="status" class="btn btn-danger">Sudah Rusak</button>
                          <?php }else if($aset->status == '0'){ ?>
                          <button type="submit" value="2" name="status" class="btn btn-warning">Perbaiki</button>
                          <button type="submit" value="4" name="status" class="btn btn-danger">Hapus</button>
                          <?php }else{ ?>
                          <button type="submit" value="0" name="status" class="btn btn-danger">Sudah Rusak</button>
                          <?php } ?>
                        </td>
                      </tr>
                      </form>
                    <?php }} ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Aset ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Status Aset</th>
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
      @stop