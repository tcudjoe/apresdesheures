<?php
    include './classes/databaseQueries.php';
    $obj = new DatabaseQueries();
?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card border-0" style="width: 18rem;">
                <img src="./img/png1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <?php
                $products = $obj->getRecords('products');
                foreach($products as $product){
            ?>
            <div class="card border-0" style="width: 18rem;">
                <img src="./<?php echo $product['img_address'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $product['name'] ?></p>
                    <p class="card-text"><?php echo $product['price'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>