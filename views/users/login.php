<?php //require __DIR__ . '../../database/db_connect.php' ?>

<div class="container" style="padding-top: 6%">

	<section id="login">

		<div class="row">

			<div class="container-fluid text-center" id="home-logo"><img class="center-block img-responsive" style="padding:1px; border:1px solid #021a40" src="img/pokemon_logo.jpg"></div>

		</div>
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
            <br>
            <div class="row">
				<div class="col-md-6 col-md-offset-3">

					<form method="POST" data-validation data-required-message="This field is required">

						<div class="form-group">
						    <input type="text" class="form-control" id="username" name="username" placeholder="Email/Username" autofocus data-required>
						</div>
						<div class="form-group">
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="col-sm-6 text-right">
								<small>Not a member? Register!</small>
								<a href="/signup" class="btn btn-warning">Sign Up</a>
							</div>
						</div>
					</form>

				</div>
			</div>
	</section>

</div>