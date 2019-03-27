<?php include_once 'inc/header.php'; ?>
    <div class="container">

        <!-- Header -->
        <h1 class="text-center my-1 font-weight-normal">Learn<span class="font-weight-light">Stuff</span></h1>
        <p class="font-weight-light text-center">Get smarter.</p>

        <!-- User creation error -->
        <?php if(isset($_GET['code'])) { ?>
            <div class="alert alert-danger" role="alert"> Error creating user </div>
        <?php } ?>

        <!-- Info -->
        <div class="jumbotron">
            <p class="lead">We offer teaching courses on subscription or for the days of your choice.</p>
            <hr class="my-4">
            <p>Like the sound of this? click the button below to get started!</p>
            <a class="btn btn-dark btn-block" href="#" role="button" onclick="$('#register_form').toggle(); return false;">Get started</a>

            <!-- Register form -->
            <?php include_once 'inc/index/register_form.php'; ?>

            <p class="my-3">Already registered? <a href="#" onclick="$('#login_form').toggle(); return false;">Login</a></p>

            <!-- Login form -->
            <?php include_once 'inc/index/login_form.php'; ?>
        </div>

    </div>
<?php include_once 'inc/footer.php'; ?>