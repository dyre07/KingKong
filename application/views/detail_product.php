<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
                        <img src="http://localhost/KingKong/product/<?php echo $detail->gambar?>">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="http://localhost/KingKong/product/<?php echo $detail->gambar?>">
								</figure>
							</div>
						</div>
                    </div>
                    
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2><?php echo $detail->merk?></h2>
							<p><a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="<?php if($this->session->userdata('login') == 'TRUE'){ echo "#myModal";}else{echo "#myModal3";}?>"><i class="icon-shopping-cart"></i> Add to Cart</a>
				                <a href="<?php 
                                         if($this->session->userdata('login') == 'TRUE'){ 
                                             echo base_url('home/add_to_wishlist/').$detail->id_barang;}else{
                                             echo "#";
                                         }
                                         ?>" class="btn btn-primary btn-outline btn-lg" 
                                   <?php if($this->session->userdata('login') != 'TRUE'){?> data-toggle="modal" data-target="#myModal3"<?php }?>><i class="icon-heart"></i> Add to whishlist</a></p>
						</div>
					</div>
                    
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Description</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<h2><?php echo $detail->merk?></h2>
									<span class="price">Rp. <?php echo number_format($detail->harga_akhir)?></span>
                                    <span class="price"><strong>Stock :</strong> <?php echo $detail->stock;?></span>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h2><?php echo $detail->merk?></h2>
									<p><?php echo $detail->deskripsi?>.</p>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-10 col-md-offset-1">
									<h3>Happy Buyers</h3>
									<div class="feed">
                                        <?php 
                                            if(!empty($feedback)){
                                                foreach ($feedback as $f){
                                        ?>
										<div>
											<h3>&mdash; <?php echo $f['nama']?></h3>
                                            <blockquote>
												<p><?php echo $f['feedback']?></p>
											</blockquote>
										</div>
                                        <?php }
                                            }else{?>
                                        <div>
                                            <blockquote>
												<p>There's no feedback for this item yet</p>
											</blockquote>
                                        </div>
                                        <?php }?>
                                        
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
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Enter Quantity</h4>
                        </div>
                        
                        <div class="modal-body">
                            <div id="fh5co-started">
			                     <div class="row animate-box">
				                    <div class="fh5co-heading text-center">
                                            <b><h2><?php echo $detail->merk?></h2></b>
					                   <form class="form-inline" action="<?php echo base_url('home/add_to_cart/').$detail->id_barang;?>" method="post">
                                           <input type="hidden" name="harga" value="<?php echo $detail->harga_akhir?>">
                                            <div class="col-md-6 col-md-offset-3">
							                     <div class="form-group">
								                    <input type="number" class="form-control" name="qty" required>
							                     </div>
                                            </div>
                                           <div class="col-md-6 col-md-offset-3">
							                     <button type="submit" class="btn btn-primary btn-block"><i class="icon-shopping-cart"></i> Add to Cart</button>
                                           </div>
					                   </form>
				                    </div>
			                     </div>
		                      </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <div class="modal-body">
				            <div class="text-center">
                                        <h3>Please Login First!!</h3>
				            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo base_url('login');?>"><button type="button" class="btn btn-primary btn-outline">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
		</div>
	</div>
<br>
<br>