<h1>New User</h1>
<form action="?route=create_user" method="post">
    <input type="hidden" name="action" value="create">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
</form>