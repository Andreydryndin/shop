<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
<?php
require 'connector.php';

$products = $mysqli->query("SELECT * FROM product;");
foreach ($products as $product) {  ?>
    <div class="container">
        <div class="row">
            <form action="/add_to_cart.php" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <small id="emailHelp" classslim.min.js="text-muted"><?php echo $product['id']; ?></small>
                </div>
                <div class="form-group">
                    <label for="title">title</label>
                    <span id="title" class="text-muted"><?php echo $product['title']; ?></span>
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <small id="price" class="text-muted"><?php echo $product['price']; ?></small>
                </div>
                <div class="form-group">
                    <label for="Quantity">Quantity</label>
                    <span class="minus">-</span>
                    <span class="plus">+</span>
                    <input type="text" class="form-control quantity" name="quantity">
                </div>
                <div class="response"></div>
                <button type="submit" class="btn btn-primary">Add to cart</button>
            </form>
        </div>
    </div>
<?php
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="app.js"></script>