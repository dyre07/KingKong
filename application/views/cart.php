<div id="fh5co-product">
    <div class="container">
	   <div class="row">
		  <div class="col-md-8 panel-default fh5co-heading">
              <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h2> Shopping Cart</h2>
							</div>
						</div>
					</div>
              </div>
              
              <div class="panel-body">
                  <?php 
                        if(!empty($cart)){
                  ?>
                <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-4 text-left">
                    <h4><strong>Merk</strong></h4>
				</div>
                            
				<div class="col-xs-2 text-left">
				        <h4><strong>Discount</strong></h4>	
				</div>
                
                <div class="col-xs-1 text-left">
				        <h4><strong>Qty</strong></h4>	
                </div>
				        
                <div class="col-xs-2 text-left">
                        <h4><strong>Total</strong></h4>	
				</div>
                  
				<div class="col-md-1 text-left">
					<h4><strong>Action</strong></h4>	
				</div>
                    </div>  
				<hr>
                  
			<?php
                    $sum = 0;
                    foreach($cart as $c){
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
				        <?php echo $c['quantity']?>	
                </div>
				        
                <div class="col-md-2">
                        Rp. <?php echo number_format($c['total']); $sum += $c['total']?>
				</div>
				<div class="col-md-1">
					<a href="<?php echo base_url('home/delete/').$c['id_cart']."/".$c['id_barang']."/".$c['quantity']?>"><button type="button" class="btn btn-link btn-sm" onClick="return confirm('Are you sure want to delete this item?')">
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
           
        <div class="col-md-3 col-md-offset-1 panel-default fh5co-heading">
            <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h2>Payment</h2>
							</div>
						</div>
					</div>
             </div>
            
            <div class="panel-body">
                <?php
                if(!empty($cart)){
              ?>
                <div class="col-md-6 text-left">
                    Item cost
                </div>
                
                <div class="col-md-6 text-right">
                    Rp. <?php echo number_format($sum);?>
                </div>
                
                <div class="col-md-6 text-left">
                    Shipping
                </div>
                
                <div class="col-md-6 text-right">
                    <?php if($sum >= 200000){ echo "Rp. 0";}else{$shipping = 22000; echo "Rp. ".number_format($shipping);};?>
                </div>
                <br>
                <p>--------------------------------------</p>
                
                <div class="col-md-6 text-left">
                    <h4>Total</h4>
                </div>
                
                <div class="col-md-6 text-right">
                    Rp. <?php echo number_format($sum);?>
                </div>
                
                <br>
                <br>
                <div class="row">
                    <div class="text-center">
                        <a href="<?php echo base_url('home/checkout')?>" class="btn btn-primary btn-block btn-center btn-sm">Proceed to Checkout</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="text-center">
                        <a href="<?php echo base_url()?>" class="btn btn-primary btn-block btn-outline btn-sm">Continue Shopping</a>
                    </div>
                </div>
                
                <?php
                }else{
                    echo "-";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>