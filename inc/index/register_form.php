<form id="register_form" action="actions/registerUser.php" method="post" class="my-3" style="display: none;">
    <hr class="my-4">
    <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter name" required>
    </div>
    <div class="form-group">
        <label for="inputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-block btn-primary">On your way!</button>
</form>