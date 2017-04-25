<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jenis Barang
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Jenis Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-5">
          <div class="box">

            <div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Jenis Barang</th>
                  <th>Jenis Barang</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($jenis_barang as $sh) {
			?>	
		
				<tr>
					<td><?php echo $sh['id_jb']; ?></td>
					<td><?php echo $sh['jenis_barang']; ?></td>
					<td><a href="<?php echo base_url('karyawan_jb/delete_jb/');?><?php echo $sh['id_jb'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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
		<a href="<?php echo base_url('karyawan_jb/input_jb');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data  </b><i class="fa fa-plus"></i></button></div> </a>
		</section> 
