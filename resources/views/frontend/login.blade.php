<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
	<title>CheckList.AIT</title>
</head>
<body>
	<div class="container-fluid">
		<div class="title">
			<h2>CheckList.AIT</h2>
		</div>
		<div class="container-fluid">
			<div class="row">				
				<form class="col-10 col-sm-7 col-md-6 col-lg-5" action="" method="POST" role="form" id="form-login">
					<h2 class="title-form">Log in</h2>
					<div class="form-group">
						<label class="lb-form-group" for=""email>Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" autofocus="">
						<p class="error errorEmail"></p>
					</div>		
					<div class="form-group">
						<label class="lb-form-group" for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						<p class="error errorPassword"></p>
					</div>		
					<div class="forget-password"><a href="#">Forgot your password ?</a></div>			
					<button type="submit" class="btn btn-primary btn-login">Confirm</button>
				</form>			
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(function(){
		$('#form-login').validate({
			rules:{
				email : {
					required : true,
					email : true,
				},
				password : {
					required : true,
					minlength : 6,
				},
			},
			messages : {
				email : {
					required : "Email is required field.",
					email : "Email invalid.",
				},
				password : {
					required : "Password is required field.",
					minlength : "Password is at least 6 characters.",
				}
			},
			submitHandler:function(){
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					'url': 'login',
					'data': {
						'email': $('#email').val(),
						'password': $('#password').val(),
					}, 
					'type':'POST',
					success:function(data){
						console.log(data);
						if (data.error == true) {
							$('.error').hide();
							if (data.message.email != undefined) {
								$('.errorEmail').show().text(data.message.email[0]);
							}
							if (data.message.password != undefined) {
								$('.errorPassword').show().text(data.message.password[0]);
							}
							if (data.message.errorlogin != undefined) {
								$('.errorLogin').show().text(data.message.errorlogin[0]);
							}
						}else{
								// window.location.href = "/welcome";
							}
						}
					})
			}
		});
	});
</script>
</html>