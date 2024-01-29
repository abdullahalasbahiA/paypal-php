<?php foreach (array_chunk($products, 3) as $chunked_products) : ?>
    <div class="card-deck">

        <?php foreach ($chunked_products as $product) : ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product['url256'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <?php echo $product['name'] . ' ' . $product['subname'] ?>
                        <strong><?php echo $product['price'] ?></strong>
                    </h5>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <a href="cart.html" class="btn btn-warning">Add to cart</a>
                </div>
            </div>
        <?php endforeach ?>

    </div>
<?php endforeach ?>