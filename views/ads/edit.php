<div class="container">

	<section>

		<div class="row">

			<h1 class="section-title">Add New Item For Sale</h1>

			<h2 class="col-md-3 text-center" id="create-title">Edit Item</h2>

		</div>

	</section>

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

			<div class="col-sm-6 col-sm-offset-3">

				<form method="POST" action="" class="form-horizontal" enctype="multipart/form-data" data-validation data-required-message="This field is required">

					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $item->name; ?>" data-required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="price" name="cost" placeholder="Cost" value="<?= $item->cost; ?>" data-required data-validate="currency" data-message="Price field needs to be a number that can include decimals. No $ or ,">
					</div>

					<div class="form-group">
						<textarea class="form-control" name="description" id="description" placeholder="Description" rows="10" data-required><?= $item->description; ?></textarea>
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" id="image" name="image" placeholder="Image">
						<p>If you upload a new image it will remove the image you currently have.</p>
					</div>

					<button type="submit" class="btn btn-primary">Update Item</button>

				</form>

			</div>

		</div>

	</section>

</div>