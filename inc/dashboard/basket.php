<div class="card my-3">
    <div class="card-header">
        Your basket
    </div>
    <div class="card-body">

        <?php $total = 0; ?>

        <!-- Loop through courses in DB - todo: change to static factory getter -->
        <?php $courses = new Course; ?>
        <?php foreach ($courses->getCoursesByUser($_SESSION['uid']) as $course) : ?>
            <div class="row">
                <div class="col-4">Course: <?=date('d/m/Y', strtotime($course->start_date))?> to <?=date('d/m/Y', strtotime($course->end_date))?></div>
                <div class="col-4">Days: <?=$course->days?></div>
                <div class="col-4">Cost: &pound;<?=$course->cost?></div>
            </div>
        <?php
            $total += $course->cost;
            endforeach; ?>

        <!-- Extra courses -->
        <?php $courses = new ExtraCourse; ?>
        <?php foreach ($courses->getCoursesByUser($_SESSION['uid']) as $course) : ?>
            <div class="row">
                <div class="col-4">Extra Course: <?=ucfirst($course->day)?> <?=$course->start_time?> to <?=$course->end_time?></div>
                <div class="col-4">Weeks: <?=$course->weeks?></div>
                <div class="col-4">Cost: &pound;<?=$course->cost?></div>
            </div>
        <?php
            $total += $course->cost;
            endforeach; ?>

        <!-- Books -->
        <?php $books = new Book; ?>
        <?php foreach ($books->getBooksByUser($_SESSION['uid']) as $book) : ?>
            <div class="row">
                <div class="col-4">Books:</div>
                <div class="col-4">Amount: <?=$book->amount?></div>
                <div class="col-4 float-right">Cost: &pound;<?=$book->cost?></div>
            </div>
        <?php
            $total += $book->cost;
            endforeach; ?>


        <hr>
        <h4 class="text-center">Total: &pound;<?=$total?></h4>
        <button class="btn btn-block btn-success" onclick="alert('Not implemented yet.');">Pay</button>
    </div>
</div>