<div class="row my-3 text-center">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Course
            </div>
            <div class="card-body">
                This is a course subscription (&pound;5 per day and no weekends)

                <form id="course_form" action="actions/addCourse.php" method="post" class="my-3">
                    <hr class="my-4">
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-block btn-secondary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Extra Course
            </div>
            <div class="card-body">
                Choose an extra course
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Books
            </div>
            <div class="card-body">
                Buy books for your studies
            </div>
        </div>
    </div>
</div>