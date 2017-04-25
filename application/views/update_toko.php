<div class="content-wrapper">    
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Data Toko
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-7">
          <div class="box">


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_toko/update_toko_proses');?>">
              <input name="id_toko" type="hidden" value="<?php echo $toko->id_toko;?>"/>
			  <div class="box-body">
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Provinsi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_provinsi" value="<?php echo $toko->id_provinsi; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Kota</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_kota" value="<?php echo $toko->id_kota; ?>">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $toko->alamat; ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_toko/');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>