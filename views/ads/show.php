<div class="container">

	<section>

		<div class="row">
			
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

            <h1><?= $item->name; ?></h1>

            <div class="col-md-6">
            	<img src="<?= $item->image_file; ?>" class="img-responsive center-block">
            </div>

            <div class="col-md-6">
            	<p class="show-page">
            		<?= $item->description; ?>
            	</p>

            	<p class="show-page">Cost: <?= ($item->cost); ?></p>

            	<h3>Seller Info</h3>
            	<p class="show-page"><a href="/users/account?id=<?= $item->user_id; ?>"><?= $item->user()->name; ?></a></p>
            </div>

		</div>

		<?php if (Auth::check() && Auth::user()->id == $item->user_id) : ?>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="/ads/edit?id=<?= $item->id; ?>" class="btn btn-success"></i>Edit Item</a>
				<a href="#" class="btn btn-danger" id="delete-item"><i class="fa fa-trash"></i>Delete Item</a>
				<form action="/ads/delete" method="POST" id="delete-item-form">
					<input type="hidden" name="id" value="<?= $item->id; ?>">
				</form>
			</div>
		</div>

		<?php endif; ?>

	</section>

</div>



