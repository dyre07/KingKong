<div id="fh5co-product">
    <div class="container">
	   <div class="row">
		  <div class="col-md-8 panel-default fh5co-heading">
              <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h2> Wishlist </h2>
							</div>
						</div>
					</div>
              </div>
              
              <div class="panel-body">
                  <?php 
                        if(!empty($wishlist)){
                  ?>
                <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-4 text-left">
                    <h4><strong>Merk</strong></h4>
				</div>
                            
				<div class="col-xs-2 text-left">
				        <h4><strong>Discount</strong></h4>	
				</div>
                  
				<div class="col-md-1 text-left">
					<h4><strong>Action</strong></h4>	
				</div>
                    </div>  
				<hr>
                  
			<?php
                    foreach($wishlist as $c){
              ?>
              <div class="row">
				<div class="col-md-2"><img class="img-responsive" src="http://localhost/KingKong/product/<?php echo $c['gambar']?>"></div>
				<div class="col-md-4">
                    <strong><?php echo $c['merk']?></strong><br>
                    Rp. <?php echo number_format($c['harga'])?>
				</div>
                            
				<div class="col-md-2">
				        <?php echo $c['diskon']?>%
				</div>
				<div class="col-md-1">
					<a href="<?php echo base_url('home/delete/').$c['id_cart']?>"><button type="button" class="btn btn-link btn-sm" onClick="return confirm('Are you sure want to delete this item?')">
                         <span><i class="glyphicon glyphicon-trash"></i></span>
                        </button></a>
				</div>
				</div>
				<hr>       
                
             <?php
                    }
                }else{?>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">Your Cart is Empty</div>
                    </div>  
				<hr>
            <?php
                }
                  ?>
		  </div>
	   </div>
    </div>
</div>
</div>