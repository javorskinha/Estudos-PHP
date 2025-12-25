<?php
    include 'config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $birthdate = $_POST['birthdate'];
    $id = $_POST['id'] ?? $_GET['id'];
    switch (@$_REQUEST['action']) {
        case 'create':
            $sql = "INSERT INTO users (name, email, password, birth_date) VALUES ('$name', '$email', '$password', '$birthdate')";
            $result = $conn->query($sql);
            if ($result) {
                echo '<script>alert("User created successfully");</script>';
                echo '<script>window.location.href = "?route=users";</script>';
            } else {
                echo '<script>alert("Error creating user: ' . $conn->error . '");</script>';
                echo '<script>window.location.href = "?route=new_user";</script>';
            }
            break;
        case 'edit':
            $sql = "UPDATE users SET name='$name', email='$email', password='$password', birth_date='$birthdate' WHERE id='$id'";
            $result = $conn->query($sql);
            if ($result) {
                echo '<script>alert("User updated successfully");</script>';
                echo '<script>window.location.href = "?route=users";</script>';
            } else {
                echo '<script>alert("Error updating user: ' . $conn->error . '");</script>';
                echo '<script>window.location.href = "?route=edit_user&id=' . $id . '";</script>';
            }
            break;
        case 'delete':
            $sql = "DELETE FROM users WHERE id='$id'";
            $result = $conn->query($sql);
            if ($result) {
                echo '<script>alert("User deleted successfully");</script>';
                echo '<script>window.location.href = "?route=users";</script>';
            } else {
                echo '<script>alert("Error deleting user: ' . $conn->error . '");</script>';
                echo '<script>window.location.href = "?route=users";</script>';
            }
            break;
    }
?>