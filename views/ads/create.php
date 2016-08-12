<div class="container">
	<section>
		<div class="row">
			<h2 class="create-title">Add Item for Sale</h2>
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

				<!--Page for creating new advertisement listings-->
				<form action="" method="POST" enctype="multipart/form-data" data-validation data-required-message="">
					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="price" price="price" placeholder="Price" data-required data-validate="currency" data-message="Price must be number/s with decimals.">
					</div>	
					<div class="form-group">
					    <textarea class="form-control" id="description" description="description" placeholder="Description" rows="8" data-required>
					    </textarea>
					</div>		
					<div class="form-group">
						<label for="image">Image</label>
					    <input type="file" id="image" name="image" placeholder="Image">
					</div>

					<button type="submit" class="btn btn-primary">Upload Item</button>							

				</form>
			</div>
		</div>
	</section>
</div>
