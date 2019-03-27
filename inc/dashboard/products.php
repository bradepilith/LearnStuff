<div class="row my-3 text-center">
    <div class="col-md-4">
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
                    <button type="submit" class="btn btn-block btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Extra Course
            </div>
            <div class="card-body">
                Choose an extra course

                <form id="course_form" action="actions/addExtraCourse.php" method="post" class="my-3">
                    <hr class="my-4">

                    <div class="form-group">
                        <label for="day">Which day of the week?</label>
                        <select id="day" name="day" class="form-control" required>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="weeks">How many weeks?</label>
                        <input type="number" id="weeks" name="weeks" class="form-control" value="1" required>
                    </div>

                    <div class="form-group">
                        <label for="start_time">Start time?</label>
                        <input type="time" id="start_time" name="start_time" class="form-control" min="9:00" max="19:00" value="10:00" step="600" required>
                    </div>

                    <div class="form-group">
                        <label for="end_time">End time?</label>
                        <input type="time" id="end_time" name="end_time" class="form-control" min="9:00" max="19:00" value="11:00" step="600" required>
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Books
            </div>
            <div class="card-body">
                Buy books for your studies

                <form id="course_form" action="actions/addBook.php" method="post" class="my-3">
                    <hr class="my-4">

                    <div class="form-group">
                        <label for="amount">Amount?</label>
                        <input type="number" id="amount" name="amount" class="form-control" value="1" required>
                    </div>

                    <button type="submit" class="btn btn-block btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>