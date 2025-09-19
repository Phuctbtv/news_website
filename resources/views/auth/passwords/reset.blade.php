<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="loginform/css/style.css">
  </head>
  <body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ADMIN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(loginform/images/bg-1.png);"></div>
						<div class="login-wrap p-4 p-md-5">
							<h3 class="mb-4">Đặt lại mật khẩu</h3>

							<form method="POST" action="{{ route('password.update') }}">
								@csrf
								<input type="hidden" name="token" value="{{ $token }}">

								<div class="form-group mb-3">
									<label class="label">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>

								<div class="form-group mb-3">
									<label class="label">Mật khẩu mới</label>
									<input type="password" name="password" class="form-control" required>
								</div>

								<div class="form-group mb-3">
									<label class="label">Xác nhận mật khẩu</label>
									<input type="password" name="password_confirmation" class="form-control" required>
								</div>

								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">
										Đặt lại mật khẩu
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="loginform/js/jquery.min.js"></script>
	<script src="loginform/js/popper.js"></script>
	<script src="loginform/js/bootstrap.min.js"></script>
	<script src="loginform/js/main.js"></script>
  </body>
</html>
