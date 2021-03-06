<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>
<div class="limiter">
	<div class="container-login100" style="background-image: url('/login_assets/images/bg-01.jpg');">
		<div class="wrap-login100 p-b-160 p-t-50">
			<form class="login100-form validate-form" action="<?= base_url('/auth/authLogin') ?>" method="POST">
				<span class="login100-form-title p-b-43">
					Login Sipus
				</span>

				<div class="text-center w-full p-t-23">
					<span class="txt2"><?= session()->getFlashdata('msg') ?></span>
				</div>

				<div class="text-center w-full p-t-23">
					<span class="text-danger text-center"><?= session()->getFlashdata('errlog') ?></span>
				</div>

				<div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
					<input class="input100" type="text" name="username" value="<?= old('username') ?>">
					<span class="label-input100">Username</span>
				</div>


				<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password">
					<span class="label-input100">Password</span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Masuk
					</button>
				</div>

				<div class="text-center w-full p-t-23">
					<span class="txt1">
						Belum punya akun?
					</span>

					<a href="<?= base_url('/auth/register') ?>" class="txt2">
						Buat akun
					</a>

				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>