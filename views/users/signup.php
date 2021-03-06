
<div class="container" style="padding: 6%">

	<section id="login">

		<div class="row">

			<div class="container-fluid text-center" id="home-logo"><a href="/"><img class="center-block img-responsive" style="padding:1px; border:1px solid #021a40" src="img/pokemon_logo.jpg"></a></div>

		</div>

			<div class="col-md-6 col-md-offset-3">

				<p>Please complete all fields.</p>
				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
	            <?php endif; ?>
	            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            <?php endif; ?>
				<?php if (isset($_SESSION['DUPLICATE_MESSAGE'])) : ?>
					<div class="alert alert-danger">
						<p class="error"><?= $_SESSION['DUPLICATE_MESSAGE']; ?></p>
					</div>
					<?php unset($_SESSION['DUPLICATE_MESSAGE']); ?>
				<?php endif; ?>

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Sign Up</button>
						</div>
						<div class="col-sm-6 text-right">
							<small>Already registered? Login!</small>
							<a href="/login" class="btn btn-warning">Login</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</section>

</div>