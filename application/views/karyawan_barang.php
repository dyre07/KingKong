<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang  
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Barang</th>
                  <th>id Jenis Barang </th>
                  <th>Id Karyawan</th>
                  <th>Merk</th>
                  <th>Stock</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga Akhir</th>
				  <th colspan="2"><a href="<?php echo base_url('karyawan_barang/input_barang/');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($barang as $sh) {
			?>	
		
				<tr>
					<td><?php echo $sh['id_barang']; ?></td>
					<td><?php echo $sh['id_jb']; ?></td>
					<td><?php echo $sh['id_karyawan']; ?></td>
					<td><?php echo $sh['merk']; ?></td>
					<td><?php echo $sh['stock']; ?></td>
					<td><?php echo $sh['harga']; ?></td>
                    <td><?php echo $sh['diskon']; ?></td>
                    <td><?php echo $sh['deskripsi']; ?></td>
                    <td><?php echo $sh['gambar']; ?></td>
                    <td><?php echo $sh['harga_akhir']; ?></td>
					<td><a href="<?php echo base_url('karyawan_barang/update_barang/');?><?php echo $sh['id_barang'];?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
					<td><a href="<?php echo base_url('karyawan_barang/delete_barang/');?><?php echo $sh['id_barang'].'/'.$sh['gambar'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
				</tr>
			<?php		
					}	
			?>				
				

				</tbody>
			   </table>
			  </div> 
			 </div>
			</div>	
		</div>
    <div class="row">
            <div class="col-md-12 text-center">
                    <?php echo $links; ?>
            </div>
    </div>
</section> 

