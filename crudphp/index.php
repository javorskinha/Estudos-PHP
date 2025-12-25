<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>CRUD PHP</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"     aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?route=new_user">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?route=users">Show Users</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar crud php
          </span>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php 
                    include 'config.php';
                    switch (@$_REQUEST['route']) {
                        case 'new_user':
                            include 'new_user.php';
                            break;
                        case 'users':
                            include 'users.php';
                            break;
                        case 'create_user':
                            include 'create_user.php';
                            break;
                        case 'edit_user':
                            include 'edit_user.php';
                            break;
                        case 'delete_user':
                            $_REQUEST['action'] = 'delete';
                            include 'create_user.php';
                            break;    
                        default:
                            echo '<h1>Welcome to CRUD PHP</h1>';
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>