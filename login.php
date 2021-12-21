<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Login Page</title>
	<style>
		.container-fluid {
			margin-top: 120px;
		}

		.main-content {
			width: 50%;
			border-radius: 20px;
			box-shadow: 0 5px 5px rgba(0, 0, 0, .4);
			margin: 5em auto;
			display: flex;
		}

		.company__info {
			background-color: #008080;
			border-top-left-radius: 20px;
			border-bottom-left-radius: 20px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			color: #fff;
		}

		.fa-android {
			font-size: 3em;
		}

		@media screen and (max-width: 640px) {
			.main-content {
				width: 90%;
			}

			.company__info {
				display: none;
			}

			.login_form {
				border-top-left-radius: 20px;
				border-bottom-left-radius: 20px;
			}
		}

		@media screen and (min-width: 642px) and (max-width:800px) {
			.main-content {
				width: 70%;
			}
		}

		.row>h2 {
			color: #008080;
			padding-left: 70px;
			margin-top: 30px;
		}

		.login_form {
			background-color: #fff;
			border-top-right-radius: 20px;
			border-bottom-right-radius: 20px;
			border-top: 1px solid #ccc;
			border-right: 1px solid #ccc;
		}

		form {
			padding: 0 2em;
		}

		.form__input {
			width: 100%;
			border: 0px solid transparent;
			border-radius: 0;
			border-bottom: 1px solid #aaa;
			padding: 1em .5em .5em;
			padding-left: 2em;
			outline: none;
			margin: 1.5em auto;
			transition: all .5s ease;
		}

		.form__input:focus {
			border-bottom-color: #008080;
			box-shadow: 0 0 5px rgba(0, 80, 80, .4);
			border-radius: 4px;
		}

		.btn {
			transition: all .5s ease;
			width: 80px;
			height: 40px;

			border-radius: 30px;
			color: #008080;
			font-weight: 600;
			background-color: #fff;
			border: 1px solid #008080;
			margin-top: 1.5em;
			margin-bottom: 1em;
			margin-left: 25px;

		}

		.btn:hover,
		.btn:focus {
			background-color: #008080;
			color: #fff;
		}
	</style>
</head>

<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">

				<img src="./img/img2.jfif" style="width:400px; height:330px;">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12">
				<div class="container-fluid">
					<div class="row" style=" margin-top:20px;">
						<h2 class=" text-center">Log In</h2>
					</div>
					<div class="row">
						<form control="" class="form-group" id="formData">
							<div class="row">
								<input type="text" name="username" id="Username" class="form__input" placeholder="Username">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="Password" class="form__input" placeholder="Password">
							</div>

							<div class="row">

								<label for="button" style=" cursor: pointer;" class="font-weight-bold" id="submit">Forget Password?</label>
								<button class="btn btn-primary dropdown-toggle float-right" type="submit" data-toggle="dropdown" onclick="postData()">Login
									<span class="caret"></span></button>

							</div>

						</form>
						<div id="tabregMsg"></div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<script src="./js/custom.js"></script>
</body>