<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sosmed.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

	<title>MeetUP Web</title>
	<link href="favicon.png" rel="shortcut icon icons" type="image/x-icon">
	<!-- google login-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<meta name="google-signin-client_id" content="29321789015-qdrl24kug61qtupttt9cdq69kve8j47o.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			// console.log('Name: ' + profile.getName());
			// console.log('Image URL: ' + profile.getImageUrl());
			// console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
			var nama = profile.getName();
			var email = profile.getEmail();
			var img = profile.getImageUrl();

			$.ajax({
				url : "index.php",
				type : "post",
				data :{
					nama : nama,
					email : email,
					img : img
				}
				success : function(data) {
					$("#tampil").html(data);
				}
			})
		}
	</script>
</head>
<body class="bg-white">

	<div class="mt-5 pt-3"></div>