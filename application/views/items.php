<div id="fh5co-product">
    <div class="container">
	   <div class="row">
		  <div class="col-md-10 col-md-offset-1 panel-default fh5co-heading">
              <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h2> Ordered Items</h2>
							</div>
						</div>
					</div>
              </div>
              
              <div class="panel-body">
                  <?php 
                        if(!empty($pesanan)){
                  ?>
                <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-3 text-left">
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
                  
				<div class="col-md-2 text-left">
					<h4><strong>Action</strong></h4>	
				</div>
                    </div>  
				<hr>
                  
			<?php
                    $sum = 0;
                    foreach($pesanan as $c){
              ?>
              <div class="row">
				<div class="col-md-2"><img class="img-responsive" src="http://localhost/KingKong/product/<?php echo $c['gambar']?>"></div>
                    <div class="col-md-3">
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
                            Rp. <?php echo number_format($c['total']);?>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-outline btn-sm" data-toggle="modal" data-target="#myModal<?php echo $c['id_barang'];?>">Feedback</button>
                    </div>
                  
                    <div class="modal fade" id="myModal<?php echo $c['id_barang'];?>" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Give Your Feedback</h4>
                                </div>

                                <div class="modal-body">
                                    <div id="fh5co-started">
                                         <div class="row animate-box">
                                            <div class="fh5co-heading text-center">
                                                    <b><h2><?php echo $c['merk'];?></h2></b>
                                               <form class="form-inline" action="<?php echo base_url('account/feedback');?>" method="post">
                                                   <input type="hidden" name="id_barang" value="<?php echo $c['id_barang'];?>">
                                                    <div class="col-md-10 col-md-offset-1">
                                                         <div class="form-group">
                                                            <textarea name="feedback" cols="30" rows="5" class="form-control" placeholder="Give your feedback here"></textarea>
                                                         </div>
                                                    </div>
                                                   <div class="col-md-4 col-md-offset-7">
                                                         <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                   </div>
                                               </form>
                                            </div>
                                         </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<hr>                  
             <?php
                    }
                }?>
              </div>
           </div>
        </div>                    
    </div>
</div>