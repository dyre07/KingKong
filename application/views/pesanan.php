<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pesanan
	  </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Data Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">

            <div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                          <th>Id Barang</th>
                          <th>Merk</th>
                          <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach($pesanan as $p) {
			?>	
		
				<tr>
					<td><?php echo $p['id_barang']; ?></td>
					<td><?php echo $p['merk']; ?></td>
					<td><?php echo $p['quantity']; ?></td>
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
