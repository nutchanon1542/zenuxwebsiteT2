<?php session_start();?>
<!DOCTYPE html>
<html>
	
		</style>
	</head>
	<body>
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<span class="glyphicon glyphicon-lock"> </span>
						<h1> Login</h3>
						<div class="d-flex justify-content-end social_icon">
						</div>
					</div>
					<div class="card-body">
						<form ame="formlogin" action="index.php" method="POST" id="login" class="form-horizontal">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="username" class="form-control" placeholder="username">
								
							</div>
							<br>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="password" class="form-control" placeholder="password">
							</div>
							<br>
							<div class="row align-items-center remember">
								<input type="checkbox">Remember me
							</div>
							<div class="form-group">
								
								<br>
								<input type="submit" value="Login" class="btn float-Right login_btn">
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>