<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image: url(
                    <?php 
                        $id_jb = $this->uri->segment(3);
                                switch ($id_jb) {
                                        case "5":
                                            echo base_url('/pet/f');
                                            break;
                                        case "4":
                                            echo base_url('/pet/g');
                                            break;
                                        case "7":
                                            echo base_url('/pet/h');
                                            break;
                                        case "6":
                                            echo base_url('/pet/i');
                                            break;
                                        case "8":
                                           echo base_url('/pet/j');
                                            break;
                                        case "9":
                                            echo base_url('/pet/k');
                                            break;
                                }
                        ?>.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <?php
                                $id_jb = $this->uri->segment(3);
                                switch ($id_jb) {
                                        case "5":
                                            echo "<h1>Cats Food</h1>";
                                            break;
                                        case "4":
                                            echo "<h1>Dogs Food</h1>";
                                            break;
                                        case "7":
                                            echo "<h1>Cat Accessories</h1>";
                                            break;
                                        case "6":
                                            echo "<h1>Dog Accessories</h1>";
                                            break;
                                        case "8":
                                            echo "<h1>Cats Litter</h1>";
                                            break;
                                        case "9":
                                            echo "<h1>Dogs Treat & Raw</h1>";
                                            break;
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Products</h2>
				</div>
			</div>
			<div class="row">
				<?php 
                    if(!empty($food)){
                        foreach($food as $a){
                            if($a['stock'] >= 1){
                ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(http://localhost/KingKong/product/<?php echo $a['gambar']?>);">
                            <?php 
                                if($a['diskon']!=0){
                            ?>
                            <span class="sale"><?php echo $a['diskon'];?>%</span>
                            <?php
                                }
                            ?>
							<div class="inner">
								<p>
									<a href="#" data-toggle="modal" data-target="<?php if($this->session->userdata('login') == 'TRUE'){ echo "#myModal".$a['id_barang'];}else{echo "#myModal3";}?>" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="<?php echo base_url('home/detail_product/').$a['id_barang']?>" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="<?php echo base_url('home/detail_product/').$a['id_barang']?>"><?php echo $a['merk'];?></a></h3>
                            <?php 
                                if($a['diskon']!=0){
                            ?>
                            <span class="price"><strike>Rp. <?php echo number_format($a['harga']);?></strike></span><br>
                            <?php
                                }
                            ?>
							<span class="price">Rp. <?php echo number_format($a['harga_akhir']);?></span>
						</div>
					</div>
				</div>
                
            <div class="modal fade" id="myModal<?php echo $a['id_barang'];?>" role="dialog">
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
                                            <b><h2><?php echo $a['merk'];?></h2></b>
					                   <form class="form-inline" action="<?php echo base_url('home/add_to_cart/').$a['id_barang'];?>" method="post">
                                           <input type="hidden" name="harga" value="<?php echo $a['harga_akhir'];?>">
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
                <?php
                            }
                    }
                }
                ?>
			</div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo $links; ?>
                </div>
            </div>
		</div>
	</div>