<?php
require_once 'database/dbConnect.php';

// Get article ID from URL
$articleId = $_GET['kbId'];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $kbTitle = $_POST['kbTitle'];
    $kbContent = $_POST['kbContent'];
    $kbCategory = $_POST['kbCategory'];

    // Update the article in the database
    $sql = "UPDATE knowledge_base SET kb_title=:kbTitle, kb_content=:kbContent, kb_category=:kbCategory WHERE kb_id=:articleId";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':kbTitle', $kbTitle);
        $stmt->bindValue(':kbContent', $kbContent);
        $stmt->bindValue(':kbCategory', $kbCategory);
        $stmt->bindValue(':articleId', $articleId);
        $stmt->execute();

        // Redirect to the admin page
        header('Location: admin.php');
        exit();
    } catch (PDOException $e) {
        // Handle any errors that occur during the update
        $errorMessage = 'Error updating article: ' . $e->getMessage();
    }
}

// Get the current article data from the database
$sql = "SELECT * FROM knowledge_base WHERE kb_id=:articleId";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':articleId', $articleId);
    $stmt->execute();

    $article = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle any errors that occur while retrieving the article
    $errorMessage = 'Error retrieving article: ' . $e->getMessage();
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Article</title>

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
                    <a class="nav-link" href="admin.php">View All Articles</a>
                </li>
                <li class="nav-item logout">
                    <a class="nav-link" href="logout.php">Logout</a>
                 </li>
            </ul>
        </div>
    </div>
</nav>


 <!-- Update Form -->
 <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Knowledge Base Article</h4>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'database/dbConnect.php';
                            $updateID = $_GET['kbId'];

                           // Check if the form has been submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Get the form data
                        $kbTitle = $_POST['kbTitle'];
                        $kbContent = $_POST['kbContent'];
                        $kbCategory = $_POST['kbCategory'];

                        // Update the article in the database
                        $sql = "UPDATE knowledge_base SET kb_title=:kbTitle, kb_content=:kbContent, kb_category=:kbCategory WHERE kb_id=:articleId";

                        try {
                            $stmt = $conn->prepare($sql);
                            $stmt->bindValue(':kbTitle', $kbTitle);
                            $stmt->bindValue(':kbContent', $kbContent);
                            $stmt->bindValue(':kbCategory', $kbCategory);
                            $stmt->bindValue(':articleId', $articleId);
                            $stmt->execute();

                            // Redirect to the admin page
                            header('Location: admin.php');
                            exit();
                        } catch (PDOException $e) {
                            // Handle any errors that occur during the update
                            $errorMessage = 'Error updating article: ' . $e->getMessage();
                        }
                    }

                    // Get the current article data from the database
                    $sql = "SELECT * FROM knowledge_base WHERE kb_id=:articleId";

                    try {
                        $stmt = $conn->prepare($sql);
                        $stmt->bindValue(':articleId', $articleId);
                        $stmt->execute();

                        $article = $stmt->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $e) {
                        // Handle any errors that occur while retrieving the article
                        $errorMessage = 'Error retrieving article: ' . $e->getMessage();
                    }
                ?>

                <?php if (isset($errorMessage)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <label for="kbTitle" class="form-label">Article Title</label>
                        <input type="text" class="form-control" id="kbTitle" name="kbTitle" value="<?php echo $article['kb_title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kbContent" class="form-label">Article Content</label>
                        <textarea class="form-control" id="kbContent" name="kbContent" rows="10"><?php echo $article['kb_content']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kbCategory" class="form-label">Article Category</label>
                        <select class="form-select" id="kbCategory" name="kbCategory">
                            <option value="Desktop" <?php if ($article['kb_category'] === 'Hardware') echo 'selected'; ?>>Desktop</option>
                            <option value="Laptop" <?php if ($article['kb_category'] === 'Software') echo 'selected'; ?>>Laptop</option>
                            <option value="Docking-Station" <?php if ($article['kb_category'] === 'Networking') echo 'selected'; ?>>Docking Station</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Goes Here -->
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
</body>
</html>