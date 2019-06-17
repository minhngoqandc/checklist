<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/createAccount.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>CheckList.AIT</title>
</head>
<body>

	<h2>Create Account</h2>

	<button class="btn-open-frame" onclick="document.getElementById('frame-create-acc').style.display='block'" style="width:auto;">Login</button>

	<div id="frame-create-acc" class="modal">
	  
		<form class="modal-content animate">
			<div class="header">
				<h2>Create Account</h2>
				<span onclick="document.getElementById('frame-create-acc').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container">
				<label class="field" for="fullname"><b>Fullname</b></label>
				<input type="text" placeholder="Thomas Edison" name="fullname" required autofocus>

				<label class="field" for="email"><b>Email</b></label>
				<input type="text" placeholder="example123@gmail.com" name="email" required>			

				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="At least 6 characters"	 name="password" required>

				<label class="field" for="level-radio"><b>Level</b></label>				
				<label class="level">
					<input type="radio" name="level-radio" required checked="checked">
					<span class="check-level"></span>
					<span class="type-level">Member</span>
				</label>
				<label class="level">
					<input type="radio" name="level-radio" required>
					<span class="check-level"></span>
					<span class="type-level">Admin</span>
				</label>

				<button class="btn-create" type="submit">Create Account</button>	
			</div>
		</form>
	</div>

	<script src="{{asset('js/createAccount.js')}}"></script>

</body>
</html>
