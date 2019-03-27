<div class="card">
    <div class="card-header">
        Your basket
    </div>
    <div class="card-body">
        <?php $courses = new Course; ?>
        <?php foreach ($courses->getCoursesByUser($_SESSION['uid']) as $course) : ?>
            <div class="row">
                <div class="col">Course: <?=date('d/m/Y', strtotime($course->start_date))?> to <?=date('d/m/Y', strtotime($course->end_date))?></div>
                <div class="col">Cost: &pound;<?=$course->cost?></div>
                <div class="col">Days: <?=$course->days?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>