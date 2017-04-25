<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Data pet
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_pet/update_pet_proses');?>">
              <input name="id_pet" type="hidden" value="<?php echo $pet->id_pet;?>"/>
			  <div class="box-body">
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Kategori</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kategori" value="<?php echo $pet->kategori; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Species</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="species" value="<?php echo $pet->species; ?>">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Ras</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="ras" value="<?php echo $pet->ras; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Umur</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="umur" value="<?php echo $pet->umur; ?>">
                  </div>
                </div>				

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $pet->tgl_lahir; ?>">
                  </div>
                </div>					

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gambar" value="<?php echo $pet->gambar; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $pet->deskripsi; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Harga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga" value="<?php echo $pet->harga; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Toko</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_toko" value="<?php echo $pet->id_toko; ?>">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">ID Karyawan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_karyawan" value="<?php echo $pet->id_karyawan; ?>">
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_pet/');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>