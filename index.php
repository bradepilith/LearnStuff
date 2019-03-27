<?php include_once 'inc/header.php'; ?>
    <div class="container">

        <!-- Header -->
        <h1 class="text-center my-1 font-weight-normal">Learn<span class="font-weight-light">Stuff</span></h1>
        <p class="font-weight-light text-center">Get smarter.</p>

        <!-- Info -->
        <div class="jumbotron">
            <p class="lead">We offer teaching courses on subscription or for the days of your choice.</p>
            <hr class="my-4">
            <p>Like the sound of this? click the button below to get started!</p>
            <a class="btn btn-dark btn-block" href="#" role="button" onclick="$('#form').toggle(); return false;">Get started</a>

            <!-- Initial form -->
            <?php include_once 'inc/index/form.php'; ?>
        </div>

    </div>
<?php include_once 'inc/footer.php'; ?>