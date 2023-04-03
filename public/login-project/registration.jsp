<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-5">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>register</title>

<!-- Font Icon -->
<link rel="stylesheet"
	href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="main">

		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Registrasi</h2>
					
						<div class="form-group">
							<label for="nik"><i class="zmdi zmdi-lock"></i></label> <input
								type="password" name="nik" id="nik" placeholder="Nik" />
						</div>

							<form method="" action="" class="register-form"
							id="register-form">
							<div class="form-group">
								<label for="nama"><i
									class="zmdi zmdi-account material-icons-nama"></i></label> <input
									type="text" nama="nama" id="nama" placeholder="Nama" />
							</div>

							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label> <input
									type="email" name="email" id="email" placeholder="Email" />
							</div>

							<div class="form-group">
								<label for="password"><i class="zmdi zmdi-lock"></i></label> <input
									type="password" name="password" id="password" placeholder="Password" />
							</div>

							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="re_pass" id="re_pass"
									placeholder="Repeat your password" />
							</div>

							<div class="form-group">
								<label for="telp"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="telp" id="telp"
									placeholder="no telepon" />
							</div>

							<div class="form-group">
								<label for="jenkel"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="jenkel" id="jenkel"
									placeholder="Jenis Kelamin" />
							</div>

							<div class="form-group">
								<label for="alamat"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="alamat" id="alamat"
									placeholder="Alamat" />
							</div>

							<div class="form-group">
								<label for="provinsi"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="provinsi" id="provinsi"
									placeholder="Provinsi" />
							</div>

							<!-- <div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term"
									class="agree-term" /> <label for="agree-term"
									class="label-agree-term"><span><span></span></span>I
									agree all statements in <a href="#" class="term-service">Terms
										of service</a></label>
							</div> -->

							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup"
									class="form-submit" value="Register" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure>
							<img src="images/signup-image.jpg" alt="sing up image">
						</figure>
						<a href="login.jsp" class="signup-image-link">I am already
							member</a>
					</div>
				</div>
			</div>
		</section>


	</div>
	<!-- JS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>



</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>