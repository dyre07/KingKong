<div class="content-wrapper">    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Barang
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_barang/input_barang_proses');?>" enctype="multipart/form-data">
			  <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Jenis Barang</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="id_jb">
					  <option selected="selected">pilih di sini</option>

					<?php

						if(!empty($show)) {
							foreach($show as $row) {
					?>					  
	
					  <option value="<?php echo $row['id_jb']; ?>"><?php echo $row['jenis_barang']; ?></option>

					<?php		
							}
					}		
					?>						  
					  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Karyawan</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="id_karyawan">
					  <option selected="selected">pilih di sini</option>

					<?php

						if(!empty($content)) {
							foreach($content as $row) {
					?>					  
	
					  <option value="<?php echo $row['id_karyawan']; ?>"><?php echo $row['nama']; ?></option>

					<?php		
							}
					}		
					?>						  
					  
					  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Merk</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="merk">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Stock</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="stock">
                  </div>
                </div>				

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Harga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga">
                  </div>
                </div>					

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Diskon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diskon">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-8">
                    <input type="file" name="gambar">
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_barang/');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>