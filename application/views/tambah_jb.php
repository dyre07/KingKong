<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Jenis Barang
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_jb/input_proses');?>">
			  <div class="box-body">
                <div class="form-group">
            
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Jenis Barang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_barang">
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_jb');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>