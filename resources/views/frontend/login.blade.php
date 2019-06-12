<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>AIT Corporation</title>
</head>
<body>
	<div class="container-fluid">
		<header>
			<h2>AIT Corporation</h2>
		</header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-md-5 col-lg-5 col-xl-4" style="margin: auto;">
					<form action="" method="POST" role="form">					
						<h2 class="title-form">Log in</h2>
						<div class="form-group">
							<label class="lb-form-group" for="">Email</label>
							<input type="text" class="form-control" id="email" placeholder="Email">
						</div>		
						<div class="form-group">
							<label class="lb-form-group" for="">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>		
						<div class="forget-password"><a href="#">Forgot your password ?</a></div>			
						<button type="submit" class="btn btn-primary">Confirm</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>