<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
                <div class="col-md-5 fh5co-heading">
					<b><h2>Unregistered User</h2></b>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <div class="col-md-8 col-md-offset-4">
							<a href="<?php echo base_url('login/register')?>"><button type="submit" class="btn btn-primary">Create an Account</button></a>
				    </div>
				</div>
                
				<div class="col-md-6 col-md-offset-1 fh5co-heading">
                    <b><h2>Registered User</h2></b>
                    <hr>
					<form class="form-inline" action="<?php echo base_url('login/dologin')?>" method="post">
						<div class="col-md-12">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>
                        <div class="col-md-12">
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-8">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>