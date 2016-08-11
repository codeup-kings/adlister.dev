<!--Page for user account home-->
<div class="container">
    <section id="account">
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
            <h1 class="section-title">User Info</h1>
            <p class="text-center">Username: <?= $user->username; ?></p>
            <p class="text-center">Name: <?= $user->name; ?></p>
            <p class="text-center">Email: <?= $user->email; ?></p>
            <?php if($user->id == Auth::id()) : ?>
                <div class="col-sm-12 text-center">
                    <a href="/users/edit.php?id=<?= $user->id; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Profile</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section id="for-sale">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-title">Your items for sale</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach($items->attributes as $key => $item) : ?>
            <div class="col-md-4">
                <h4 class="text-center"><?= $item['name']; ?></h4>
                <img src="<?= $item['image_url']; ?>" class="img-responsive center-block">
                <p>
                    <?= substr($item['description'], 0, 100) . "..."; ?>
                </p>
                <p>
                    <a href="/ads/show.php?id=<?= $item['id']; ?>">See More</a>
                </p>
            </div>
            <?php if (($key + 1) % 3 == 0) : ?>
        </div>
        <div class="row">
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php if($user->id == Auth::id()) : ?>
            <div class="row text-center">
                <a href="/ads/create.php" class="btn btn-success">Create a new ad</a>
            </div>
        <?php endif; ?>

    </section>

</div>