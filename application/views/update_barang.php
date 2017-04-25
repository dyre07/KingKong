<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Data Barang
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


            <form class="form-horizontal" method="post" action="<?php echo base_url('karyawan_barang/update_barang_proses');?>">
              <input name="id_barang" type="hidden" value="<?php echo $barang->id_barang;?>"/>
			  <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Id Jenis Barang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_jb" value="<?php echo $barang->id_jb; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Id Karyawan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_karyawan" value="<?php echo $barang->id_karyawan; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Merk</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="merk" value="<?php echo $barang->merk; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Stock</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="stock" value="<?php echo $barang->stock; ?>">
                  </div>
                </div>				

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Harga</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga" value="<?php echo $barang->harga; ?>">
                  </div>
                </div>					

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Diskon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="diskon" value="<?php echo $barang->diskon; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $barang->deskripsi; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="gambar" value="<?php echo $barang->gambar; ?>">
                  </div>
                </div>	
                  
                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Harga Akhir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga_akhir" value="<?php echo $barang->harga_akhir; ?>">
                  </div>
                </div>	
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default"><a href="<?php echo base_url('karyawan_barang/');?>">Batal</a></button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
		</div>
	</div>	
	</section>