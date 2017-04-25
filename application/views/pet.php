<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image: url(
                    <?php 
                        $pett = $this->uri->segment(3);
                                switch ($pett) {
                                        case "anjing":
                                            echo base_url('/pet/l');
                                            break;
                                        case "kucing":
                                            echo base_url('/pet/m');
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
                                $pett = $this->uri->segment(3);
                                switch ($pett) {
                                        case "anjing":
                                            echo "<h1>Our Lovely Dogs</h1>";
                                            break;
                                        case "kucing":
                                            echo "<h1>Our Lovely Cats</h1>";
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
                    <span>This Only Show You Our Pet's, If you likely to pet one of them, please come to our store in the pet's description</span>
					<h2>Pets</h2>
				</div>
			</div>
			<div class="row">
				<?php 
                    if(!empty($pet)){
                        foreach($pet as $p){
                ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(http://localhost/KingKong/pet/<?php echo $p['gambar'];?>);">
							<div class="inner">
								<p>
									<a href="<?php echo base_url('home/pet_detail/').$p['id_pet']?>"class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="<?php echo base_url('home/pet_detail/').$p['id_pet']?>"><?php echo $p['species'];?></a></h3>
							<span class="price"><?php echo $p['ras'];?></span>
						</div>
					</div>
                </div>
                <?php
                        }
                    }
                ?>
		</div>
	</div>
</div>