<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>CheckList.AIT</title>
</head>
<body>
	<div class="container-fluid">
		<div class="title">
			<h2>CheckList.AIT</h2>
		</div>
		<div class="container-fluid">
			<div class="row">				
				<form class="col-10 col-sm-7 col-md-6 col-lg-5" action="" method="POST" role="form">
					<h2 class="title-form">Log in</h2>
					<div class="form-group">
						<label class="lb-form-group" for=""email>Email</label>
						<input type="email" class="form-control" id="email" placeholder="Email" autofocus="">
					</div>		
					<div class="form-group">
						<label class="lb-form-group" for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>		
					<div class="forget-password"><a href="#">Forgot your password ?</a></div>			
					<button type="submit" class="btn btn-primary btn-login">Confirm</button>
				</form>			
			</div>
		</div>
	</div>
</body>
</html>