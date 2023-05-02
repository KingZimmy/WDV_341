<?php
    include 'database/dbConnect.php';
   
    $successMsg = '';
    $errorMsg = '';


    if(isset($_POST['submit'])) {
        $kbTitle = $_POST['kbTitle'];
        $kbContent = $_POST['kbContent'];
        $kbCategory = $_POST['kbCategory'];

         // Check for honeypot field
    if(!empty($_POST['email2'])) {
        // Honeypot field is filled in, assume bot submission
        exit();
    }

    $sql = "INSERT INTO knowledge_base (kb_title, kb_content, kb_category, kb_created_at) VALUES (:kbTitle, :kbContent, :kbCategory, NOW())";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':kbTitle', $kbTitle);
            $stmt->bindValue(':kbContent', $kbContent);
            $stmt->bindValue(':kbCategory', $kbCategory);
            $stmt->execute();

            $successMsg = 'Knowledge Base article added successfully!';
        } catch (PDOException $e) {
            $errorMsg = 'Error adding Knowledge Base article: ' . $e->getMessage();
        }

        $conn = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
                    <a class="nav-link" href="admin.php">View All Articles</a>
                </li>
                <li class="nav-item logout">
                    <a class="nav-link" href="logout.php">Logout</a>
                 </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Add Form -->
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <?php if(!empty($successMsg)): ?>
                    <div class="alert alert-success"><?php echo $successMsg; ?></div>
                <?php endif; ?>

                <?php if(!empty($errorMsg)): ?>
                    <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
                <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Knowledge Base Article</h4>
                </div>
                <div class="card-body">
                  <form method="POST">
            <div class="mb-3">
                <label for="kbTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="kbTitle" name="kbTitle" required>
            </div>
            <div class="mb-3">
                <label for="kbContent" class="form-label">Content</label>
                <textarea class="form-control" id="kbContent" name="kbContent" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="kbCategory" class="form-label">Category</label>
                <select class="form-select" id="kbCategory" name="kbCategory" required>
                    <option value="" selected disabled>Select Category</option>
                    <option value="Desktop Issues">Desktop Issues</option>
                    <option value="Laptop Issues">Laptop Issues</option>
                    <option value="Docking Station Issues">Docking Station Issues</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Article</button>
        </form>
    </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Footer here -->

<footer class="footer text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
    <h5 class="text-uppercase">Admin Portal</h5>
    <p>Welcome to the Admin Portal of Byte Me PC Repair Shop. This portal is designed for administrators to manage the knowledge base articles and perform various administrative tasks. Here, you can add new articles, update existing ones, and delete articles when necessary. Feel free to explore the functionalities and keep the knowledge base up to date.</p>
</div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="add.php" class="text-white">Add Article</a>
                    </li>
                    <li>
                        <a href="admin.php" class="text-white">View All</a>
                    </li>
                    <li>
                        <a href="index.php" class="text-white">Home</a>
                    </li>
                    <li>
                        <a href="logout.php" class="text-white">Log Out</a>
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
<!--POP UP-->
<script>
    <?php if(!empty($successMsg)): ?>
    $(document).ready(function() {
        $('#toast').toast('show');
    });
    <?php endif; ?>
</script>

<?php if(!empty($successMsg)): ?>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toast" class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo $successMsg; ?>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-XXXXXXXXXXXXXXX" crossorigin="anonymous"></script>

<!-- Bootstrap 5 JS --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

