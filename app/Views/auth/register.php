<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>
<div class="limiter">
	<div class="container-login100" style="background-image: url('/login_assets/images/bg-01.jpg');">
		<div class="wrap-login100 p-b-160 p-t-50">
			<form class="login100-form validate-form" action="<?= base_url('/auth/saveRegister') ?>" method="POST">
				<span class="login100-form-title p-b-43">
					Register Sipus
				</span>
				<div class="text-center w-full p-t-23">
					<span class="txt2"><?= $validation->listErrors(); ?></span>
				</div>
				<div class="wrap-input100 rs1 validate-input" data-validate="Fullname is required">
					<input class="input100" type="text" name="fullname" value="<?= old('fullname') ?>">
					<span class="label-input100">Nama Lengkap</span>
				</div>

				<div class="wrap-input100 rs2 validate-input" data-validate="Valid email is required">
					<input class="input100" type="email" name="email" value="<?= old('email') ?>">
					<span class="label-input100">Email</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Username is required">
					<input class="input100" type="text" name="username" value="<?= old('username') ?>">
					<span class="label-input100">Username</span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password">
					<span class="label-input100">Password</span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Daftar
					</button>
				</div>

				<div class="text-center w-full p-t-23">
					<span class="txt1">
						Sudah punya akun?
					</span>

					<a href="<?= base_url('/auth/login') ?>" class="txt2">
						Masuk disini
					</a>

				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>