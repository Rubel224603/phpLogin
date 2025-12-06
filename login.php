<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">

            <h3 class="text-center mb-4">User Login</h3>

            <div class="card">
                <div class="card-body">

                    <form action ="dashboard.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary">Login</button>
                        </div>

                    </form>

                    <p class="text-center mt-3">
                        Don't have an account? <a href="register.php">Register</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
