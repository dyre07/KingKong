<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url('/pet/')?>a.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						
		   						<h2>Welcome to our Pet World!</h2>
		   						<p>Your pet is your best friend, and certainly deserves the best treatment. Pet World offers a full line of pet accessories designed to make life comfortable, fun and easy for your favorite little family member. Don’t miss out on our great collections of pet products because we’ve got everything you need to make sure your pets are truly loved and cared. From dog houses and clothes to aquarium accessories, we stock a huge selection to choose from.</p>
			   					<!--<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>-->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url('pet/')?>b.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						
		   						<h2>Dog houses for comfortable sleep</h2>
		   						<p>With our dog house you can be sure your pet has comfortable and soft place to curl up at night. We stock a fabulous collection of different dog houses, beds and mats that offers both comfort and style at a great price. Check out all the variations, colors and sizes and find the comfortable bed, which your dog has been dreaming of.</p>
			   					<!--<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>-->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url('/pet/')?>c.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						
                                <h2>Cozy and fashionable dog clothes</h2>
		   						<p>Discover our great selection of dog clothes. Dog clothes are essential for many dog owners during cold months. We can offer you a wide range of clothes: jumpsuits, sweaters, coats, vests and many more. They are a great option for keeping your pet warm and dry in all weather conditions, and they are comfortable and stylish. We also stock a great range of dog clothing that is really fashionable and fun. Hoodies, t-shirts and Halloween costumes will make dog-friendly events and parties more fun and adorable. </3 </p>
			   					<!--<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>-->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url('/pet/')?>d.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						
		   						<h2>Dog poster for lovely room decoration</h2>
		   						<p>What is more, now you can make a poster with your favourite four-legged family member. The dog poster can be a great decoration in your house or a lovely present for friends who can’t live without their pets.<3 </p>
			   					<!--<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>-->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Products</h2>
				</div>
			</div>
			<div class="row">
				<?php 
                    if(!empty($barang)){
                        foreach($barang as $a){
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
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>