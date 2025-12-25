<h1>Edit User</h1>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users WHERE id = ".$_REQUEST['id'];
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<form action="?route=create_user" method="post">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" class="form-control" value="<?php echo $row['birth_date']; ?>">
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-3">Update</button>
</form>