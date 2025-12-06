<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Dashboard</a>

        <div class="d-flex">
            <a href="#" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-light vh-100 border-end">
            <ul class="nav flex-column p-3">
                <li class="nav-item mb-2">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <h3 class="mb-4">Dashboard Overview</h3>

            <div class="row">

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>Total Users</h5>
                            <h3>120</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>Total Orders</h5>
                            <h3>85</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>Total Revenue</h5>
                            <h3>$12,450</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Recent Activities
                </div>
                <div class="card-body">
                    <ul>
                        <li>User John registered</li>
                        <li>Order #204 completed</li>
                        <li>New product added: iPhone 15</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>
