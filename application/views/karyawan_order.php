<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Order  
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Order</li>
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
                          <th>Id Order</th>
                          <th>Id User</th>
                          <th>Alamat</th>
                          <th>Kode Pos</th>
                          <th>Method</th>
                          <th>telp</th>
                          <th>total</th>
                          <th>Status</th>
                          <th>Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($order as $or) {
			?>	
		
				<tr>
					<td><?php echo $or['id_order']; ?></td>
					<td><?php echo $or['id_user']; ?></td>
					<td><?php echo $or['alamat']; ?></td>
					<td><?php echo $or['kode_pos']; ?></td>
					<td><?php echo $or['method']; ?></td>
                    <td><?php echo $or['telp']; ?></td>
                    <td><?php echo $or['total']; ?></td>
                    <td><?php $status = $or['status'];
                                    switch ($status){
                                        case "order":
                                            echo"waiting for payment";
                                            break;
                                        case "payed":
                                            echo "<a href='".base_url('karyawan_order/confirm/').$or['id_order']."'><button class='btn btn-success'>Confirm Payment</button></a>";
                                            break;
                                        case "cod":
                                            echo "<a href='".base_url('karyawan_order/confirm/').$or['id_order']."'><button class='btn btn-success'>Kirim Barang</button></a>";
                                            break;
                                        case "confirmed":
                                            echo "On Proccess";
                                            break;
                                        case "done":
                                            echo "Done";
                                            break;}
                        
                        
                        ?>                    
                    </td>
                    <td><a href="<?php echo base_url('karyawan_order/pesanan/').$or['no_order']?>"><button class="btn btn-primary btn-sm">Lihat Pesanan</button></a></td>
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
		</section> 
