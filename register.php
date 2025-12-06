<?php
$nameMessage  =   '';
$emailMessage =   '';
$passMessage  =   '';


if (isset($_POST['submit'])) {
    $userName  = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPass  = $_POST['password'];

    $db = mysqli_connect('localhost', 'root', '', 'loginsystem');
    if (!$db) {
        echo "Database connection not Eastbilshed";
    }
    if (empty($userName)) {
        $nameMessage = "Fill up this fild";
    }
    if (empty($userEmail)) {
        $emailMessage = "Fill up this fild";
    }

    if (empty($userPass)) {
        $passMessage = "Fill up this fild";
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">

                <h3 class="text-center mb-4">User Registration</h3>

                <div class="card">
                    <div class="card-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name">
                                <?php echo '<span color="text-dark">' . $nameMessage . '</span>'; ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email">
                                <?php
                                if (isset($_POST['submit'])) {
                                    echo '<span class="text-dark">' . $nameMessage . '</span>';
                                }
                                ?>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter password" name="password">
                                <?php echo '<span color="text-dark">' . $passMessage . '</span>'; ?>

                            </div>

                            <div class="d-grid">
                                <input type="submit" name="submit" class="btn btn-success">
                            </div>

                        </form>

                        <p class="text-center mt-3">
                            Already have an account? <a href="login.php">Login</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>