<form action="<?php echo base_url('home/place_order')?>" method="post">
<div id="fh5co-started">
    <div class="container">
        <div class="row animate-box">
            <div class="panel-group fh5co-heading" id="accordion">
                <div class="panel panel-default">
                    <div>
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Shipping Address Payment Method</button>
                    </div>
                    
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="col-md-6 col-md-offset-3">
                                <div id="fh5co-started">
                                    <div class="panel-body">
							             <div class="form-group">
								            <input type="text" class="form-control" name="alamat" placeholder="Address" required>
							             </div>
                                    
							             <div class="form-group">
								            <input type="text" class="form-control" name="postcode" placeholder="Post Code" required>
							             </div>
                                         
                                         <div class="form-group">
								            <input type="text" class="form-control" name="telp" placeholder="Phone Number" required>
							             </div>
                                    
                                         <div class="form-group">
                                            <label class="radio-inline">
                                                <input name="method" type="radio" value="bank">Bank Transfer</label>
                                            <label class="radio-inline">
                                                <input name="method" type="radio" value="cod">COD</label>
                                        </div>
                                        <div class="form-group text-right">
                                            <button class="btn btn-default btn-sm" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Next</button>
							             </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div>
                        <button class="btn btn-primary btn-block">
                             Order List
                        </button>
                    </div>
                    
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div id="fh5co-product">
    <div class="container">
	   <div class="row">
		  <div class="col-md-8 col-md-offset-2 panel-default fh5co-heading">
              
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
              <input type="hidden" name="total" value="<?php echo $sum;?>">
              <div class="form-group text-center">
                    <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Place Order</a>
              </div>
	   </div>
    </div>
</div>
</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    
    <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
				            <div class="text-center">
                                        <h4>Please transfer Rp. <?php echo $sum;?> to BCA Bank Account <strong>033039 A/n KingKong Petshop.inc</strong> and confirm your transfer</h4>
				            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-outline">Ok</button>
                        </div>
                    </div>
                </div>
</div>
    </div>
</form>