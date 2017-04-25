<div id="fh5co-product">
		<div class="container">
            <ul class="nav nav-pills nav-stacked col-md-3">
                <li class="active"><a href="#tab_a" data-toggle="pill">My Account</a></li>
                <li><a href="#tab_b" data-toggle="pill">Order List</a></li>
                <li><a href="#tab_c" data-toggle="pill">Wishlist</a></li>
                <li><a href="<?php echo base_url('login/logout')?>">Log Out</a></li>
            </ul>

            <div class="tab-content col-md-9">
                <div class="tab-pane active" id="tab_a">
                    <div class="panel-default">
                          <div class="panel-heading">
                                <div class="panel-title">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h3> My Account </h2>
                                        </div>
                                    </div>
                                </div>
                          </div>

                          <div class="col-md-offset-3 panel-body">
                              <div class="col-md-2"><strong>Name</strong></div><div class="col-md-1">:</div><div class="col-md-9"><?php echo $this->session->userdata('nama');?></div>
                              <div class="col-md-2"><strong>Address</strong></div><div class="col-md-1">:</div><div class="col-md-9"><?php echo $this->session->userdata('alamat');?></div>
                              <div class="col-md-2"><strong>Gender</strong></div><div class="col-md-1">:</div><div class="col-md-9"><?php echo $this->session->userdata('jk');?></div>
                              <div class="col-md-2"><strong>E-mail</strong></div><div class="col-md-1">:</div><div class="col-md-9"><?php echo $this->session->userdata('email');?></div>
                              <div class="col-md-2"><strong>Telp.</strong></div><div class="col-md-1">:</div><div class="col-md-9"><?php echo $this->session->userdata('no_telp');?></div>
                              <div class="col-md-12 text-right"><button class="btn btn-primary btn-outline btn-xs" data-toggle="modal" data-target="#myModal">Change</button></div>
                          </div>
                    </div>
                </div>
        
                <div class="tab-pane" id="tab_b">
                    <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>Id order</th>
                                  <th>Address</th>
                                  <th>Method</th>
                                  <th>Telp. Number</th>
                                  <th>Total</th>
                                  <th>Item</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody> 
                              <?php
                              if(!empty($order)){
                                foreach($order as $o){
                              ?>
                              <tr>
                                  <td><?php echo $o['id_order']?></td>
                                  <td><?php echo $o['alamat']?></td>
                                  <td><?php echo $o['method']?></td>
                                  <td><?php echo $o['telp']?></td>
                                  <td>Rp. <?php echo number_format($o['total'])?></td>
                                  <td><a href="<?php echo base_url('account/pesanan/').$o['no_order']?>"><button class="btn btn-primary btn-sm">See ordered items</button></a></td>
                                  <td><?php $status = $o['status'];
                                    switch ($status){
                                        case "order":
                                            echo"<button class='btn btn-outline btn-success btn-sm' class='btn btn-primary btn-outline btn-xs' data-toggle='modal' data-target='#myModal2'>Confirm Transfer</button>";
                                            break;
                                        case "payed":
                                            echo "Waiting for confirmation...";
                                            break;
                                        case "cod":
                                            echo "Waiting for shipping...";
                                            break;
                                        case "confirmed":?>
                                            <h4>On Proccess</h4><a href="<?php echo base_url('account/confirm/').$o['id_order']?>"><button class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $o['id_order'];?>" onclick="return confirm('Thank You for trusting us to take care of your lovely pet, if you have any questions or complaints please feel free to contact us :)')">Item Arrived</button></a><?php ;
                                            break;
                                        case "done":
                                            echo "Done";
                                            break;
                                      ?></td>
                              </tr>
                              <?php
                                    }
                                }
                              }else{
                              ?>
                                    <td colspan="6" class="text-center">There's no order yet</td>
                        <?php
                            }
                              ?>
                          </tbody>
                        </table>
                </div>
        
                <div class="tab-pane" id="tab_c">
                    <div class="panel-default">
                          <div class="panel-heading">
                                <div class="panel-title">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h3> Wishlist </h2>
                                        </div>
                                    </div>
                                </div>
                          </div>

                          <div class="panel-body">
                              <?php 
                                    if(!empty($wishlist)){
                              ?>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 text-left">
                                    <strong>Merk</strong>
                                </div>

                                <div class="col-md-2 text-left">
                                    <strong>Discount</strong>	
                                </div>

                                <div class="col-md-1 text-left">
                                    <strong>Action</strong>	
                                </div>
                            </div>  
                            <hr>
                            
                              <?php
                                foreach($wishlist as $c){
                            ?>
                          <div class="row">
                            <div class="col-md-2">
                                <img class="img-responsive" src="http://localhost/KingKong/product/<?php echo $c['gambar']?>">
                            </div>
                              
                            <div class="col-md-4">
                                <strong><?php echo $c['merk']?></strong><br>
                                Rp. <?php echo number_format($c['harga'])?>
                            </div>

                            <div class="col-md-2">
                                    <?php echo $c['diskon']?>%
                            </div>
                              
                            <div class="col-md-1">
                                <a href="<?php echo base_url('home/delete_wishlist/').$c['id_cart']?>"><button type="button" class="btn btn-link btn-sm" onClick="return confirm('Are you sure want to delete this item?')">
                                     <span><i class="glyphicon glyphicon-trash"></i></span>
                                </button></a>
                            </div>
                        </div>
                        <hr>       

                         <?php
                                }
                            }else{?>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">Your Wishlist is Empty</div>
                                </div>  
                            <hr>
                        <?php
                            }
                              ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Profile Data</h4>
                        </div>
                        
                        <div class="modal-body">
                            <div id="fh5co-started">
			                     <div class="row animate-box">
				                    <div class="fh5co-heading text-center">
					                   <form class="form-inline" action="<?php echo base_url('account/update_account')?>" method="post">
                                            <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="nama" placeholder="Name" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="alamat" placeholder="Address" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
                                                    <div class="col-md-9">
                                                        <label class="radio-inline">
                                                            <input name="jk" type="radio" value="male">Male</label>
                                                        <label class="radio-inline">
                                                            <input name="jk" type="radio" value="female">Female</label>
                                                    </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="no_telp" placeholder="Phone Number" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="password" class="form-control" name="pass" placeholder="Password" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <button type="submit" class="btn btn-primary text-right">Update Profile</button>
                                           </div>
					                   </form>
				                    </div>
			                     </div>
		                      </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Transfer Confirmation</h4>
                        </div>
                        
                        <div class="modal-body">
                            <div id="fh5co-started">
			                     <div class="row animate-box">
				                    <div class="fh5co-heading text-center">
					                   <form class="form-inline" action="<?php echo base_url('account/payment');?>" method="post">
                                            <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="id_order" placeholder="Order ID" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="bank" placeholder="Bank" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="bank_account" placeholder="Bank Account" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="text" class="form-control" name="nominal" placeholder="Nominal" required>
							                     </div>
                                            </div>
                                           
                                           <div class="col-md-9 col-md-offset-1">
							                     <div class="form-group">
								                    <input type="date" class="form-control" name="date" placeholder="Transfer Date" required>
							                     </div>
                                            </div>
                                           <div class="col-md-9 col-md-offset-1">
							                     <button type="submit" class="btn btn-primary text-right">Confirm Transfer</button>
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
</div>
<br>
<br>