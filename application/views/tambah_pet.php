<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Hewan
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

            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_pet/input_proses');?>" enctype="multipart/form-data">
			  <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Kategori</label>
                  <div class="col-sm-8">
                      <select class="form-control select2" name="kategori">
					       <option selected="selected">pilih di sini</option>	
                          <option value="Anjing"> Anjing </option>
                          <option value="Kucing"> Kucing </option>
					  </select>
                  </div>
                </div>				

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Species</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="species">
                  </div>
                </div>					

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Ras</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ras">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur">
                  </div>
                </div>	
                  
                  <div class="form-group">
                <label  class="col-sm-3 control-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<div class="input-group date">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="date" class="form-control pull-right" id="datepicker" name="tgl_lahir">
					</div>
				</div>
              </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-8">
                    <input type="file" name="gambar">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Harga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga">
                  </div>
                </div>	
                  
                 <div class="form-group">
                  <label  class="col-sm-3 control-label">Toko</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="id_toko">
					  <option selected="selected">pilih di sini</option>

					<?php

						if(!empty($toko)) {
							foreach($toko as $row) {
                                
					?>					  
	
					  <option value="<?php echo $row['id_toko']; ?>"><?php echo $row['alamat'].", ".$row['kota']; ?></option>

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

						if(!empty($karyawan)) {
							foreach($karyawan as $row) {
					?>					  
	
					  <option value="<?php echo $row['id_karyawan']; ?>"><?php echo $row['nama']; ?></option>

					<?php		
							}
					}		
					?>						  
					  
					  </select>
                  </div>
                </div>

				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_pet/');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>