<?php include_once 'inc/header.php'; ?>
    <div class="container">

        <!-- Header -->
        <h1 class="text-center my-1 font-weight-normal">Dashboard</h1>
        <p class="font-weight-light m-3 text-center">
            Hello <?=$_SESSION['name']?>. Choose which product you want.
        </p>

        <?php include_once 'inc/dashboard/products.php'; ?>
        <?php include_once 'inc/dashboard/basket.php'; ?>

    </div>
<?php include_once 'inc/footer.php'; ?>