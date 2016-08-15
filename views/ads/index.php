<div class="container">
	<section>
		<div class="row">
		<a href="/"><img class="center-block img-responsive" href="/" style="padding:1px; border:1px solid #021a40" src="img/pokemon_logo.jpg"></a>
		
		<h2 class="col-md-3 text-center" id=for-sale>For Sale</h2>
		</div>
	
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

            <?php foreach($items->attributes as $key => $item) : ?>
            	<div class="col-md-2">
            		<h3 class="text-center"><?= $item['name']; ?></h3>
            		<img src="<?= $item['image_file']; ?>" class=" text-center img-responsive center-block">
            		<h2 class="text-center"><?= convertToMoney($item['cost']); ?></h2>
            		<p id="poke-description">
            			<?= substr($item['description'], 0, 100) . "...";?>
            		</p>
            		<p>
            			<a href="/ads/show?id=<?= $item['id']; ?>">See More</a>
            		</p>
				</div>
			<?php if (($key + 1) % 3 == 0) : ?>
		

			<div class="row">
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>

		<?php if (Auth::check()) : ?>
			<div class="row text-center">
				<a href="/ads/create" class="btn btn-success">Create Ad</a>
			</div>
		<?php endif; ?>
	</section>
</div>