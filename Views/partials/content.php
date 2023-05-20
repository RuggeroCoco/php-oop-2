<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <i class="<?php echo $product->category->icon; ?>"></i>
                            <p>Category: <?php echo $product->category->name; ?></p>
                            <p>€<?php echo $product->price; ?></p>
                            <p><?php echo $product->getDetails(); ?></p>
                            <?php if (get_class($product) === "Food") { ?>
                                <p><?php echo $product->getExpiration(); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</main>