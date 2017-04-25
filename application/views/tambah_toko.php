<div class="content-wrapper">    
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Toko
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_toko/input_proses');?>">
			  <div class="box-body">
                <div class="form-group">
                    
                <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Provinsi</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="id_provinsi">
					  <option selected="selected">pilih di sini</option>

					<?php

						if(!empty($provinsi)) {
							foreach($provinsi as $row) {
					?>					  
	
					  <option value="<?php echo $row['id_provinsi']; ?>"><?php echo $row['provinsi']; ?></option>

					<?php		
							}
					}		
					?>						  
					  </select>
                  </div>
                </div>
                    
                <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Kota</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="id_kota">
					  <option selected="selected">pilih di sini</option>

					<?php

						if(!empty($kota)) {
							foreach($kota as $row) {
					?>					  
	
					  <option value="<?php echo $row['id_kota']; ?>"><?php echo $row['kota']; ?></option>

					<?php		
							}
					}		
					?>						  
					  </select>
                  </div>
                </div>
            
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_toko');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>