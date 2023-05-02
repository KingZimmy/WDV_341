

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Page</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>
.navbar {
    background-color: black;
}

.navbar .navbar-brand,
.navbar .navbar-nav .nav-link {
    color: white !important;
}

.footer {
    background-color: black;
    color: white;
}

.logout {
    position: absolute;
    top: 0;
    right: 0;
    margin: 10px;
}
</style>
</head>
<body> 
<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">PC Repair Shop Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="add.php">Add a Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_all.php">View All Articles</a>
                </li>
                <li class="nav-item logout">
                    <a class="nav-link" href="logout.php">Logout</a>
                 </li>
            </ul>
        </div>
    </div>
</nav>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Footer Goes Here -->
<footer class="footer text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">PC Repair Shop</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Contact</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-white">Email: info@pcrepairshop.com</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Phone: +1 (123) 456-7890</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Address: 123 Main St, Anytown USA</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Byte Me PC Repair Shop
    </div>
</footer>
</body>
</html>