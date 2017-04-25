
<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="fh5co-heading">
                    <b><h2>Register an account</h2></b>
                    <hr>
					<form action="<?php echo base_url('login/add_register')?>" method="post">
                        <div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
						</div>
                        
                        <div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="no_telp" placeholder="Phone Number" required>
							</div>
						</div>
                        
                        <div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
						</div>                       
                        
                        <div class="col-md-6">
                                <div class="col-md-9">
                                    <label class="radio-inline">
                                        <input name="jk" type="radio" value="male">Male</label>
                                    <label class="radio-inline">
                                        <input name="jk" type="radio" value="female">Female</label>
                                </div>
                        </div>
                        
						<div class="col-md-4 col-md-offset-4">
							<button type="submit" class="btn btn-primary btn-block">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>