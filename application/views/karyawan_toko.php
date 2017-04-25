<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Toko 
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Toko</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8">
          <div class="box">

            <div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Toko</th>
                  <th>ID Provinsi</th>
                  <th>ID Kota</th>
                  <th>Alamat</th>
                  <th colspan="2"><a href="<?php echo base_url('karyawan_toko/input_toko');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($toko as $sh) {
			?>	
		
				<tr>
					<td><?php echo $sh['id_toko']; ?></td>
					<td><?php echo $sh['id_provinsi']; ?></td>
					<td><?php echo $sh['id_kota']; ?></td>
					<td><?php echo $sh['alamat']; ?></td>
                    <td><a href="<?php echo base_url('karyawan_toko/update_toko/');?><?php echo $sh['id_toko'];?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
					<td><a href="<?php echo base_url('karyawan_toko/delete_toko/');?><?php echo $sh['id_toko'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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
        <a href="<?php echo base_url('karyawan_toko/input_toko'); ?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a>
		</section> 
    
