<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Hewan 
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Hewan</li>
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
                  <th>ID Hewan</th>
                  <th>Kategori</th>
                  <th>Species</th>
                  <th>Ras</th>
                  <th>Umur</th>
                  <th>Tanggal Lahir</th>
                  <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>ID Toko</th>
                    <th>ID Karyawan</th>
				  <th colspan="2"><a href="<?php echo base_url('karyawan_pet/input_pet');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($pet as $sh) {
			?>	
		
				<tr>
					<td><?php echo $sh['id_pet']; ?></td>
					<td><?php echo $sh['kategori']; ?></td>
					<td><?php echo $sh['species']; ?></td>
					<td><?php echo $sh['ras']; ?></td>
					<td><?php echo $sh['umur']; ?></td>
					<td><?php echo $sh['tgl_lahir']; ?></td>
                    <td><?php echo $sh['gambar']; ?></td>
                    <td><?php echo $sh['deskripsi']; ?></td>
                    <td><?php echo $sh['harga']; ?></td>
                    <td><?php echo $sh['id_toko']; ?></td>
                    <td><?php echo $sh['id_karyawan']; ?></td>
					<td><a href="<?php echo base_url('karyawan_pet/update_pet/');?><?php echo $sh['id_pet'];?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
					<td><a href="<?php echo base_url('karyawan_pet/delete_pet/');?><?php echo $sh['id_pet'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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
		<a href="<?php echo base_url('karyawan_pet/input_pet');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data  </b><i class="fa fa-plus"></i></button></div> </a>
		</section> 
