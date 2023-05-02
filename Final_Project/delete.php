<?php

$deleteId = $_GET['kbId'];

try {
    require 'database/dbConnect.php';
    $sql = "DELETE FROM knowledge_base WHERE kb_id=:kbId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':kbId', $deleteId);
    $stmt->execute();
    $numDeletes = $stmt->rowCount();
    if ($numDeletes > 0) {
        $message = 'The article has been successfully deleted.';
    } else {
        $message = 'The article could not be deleted. Please try again later.';
    }
} catch (PDOException $e) {
    $message = 'Error deleting article: ' . $e->getMessage();
}

$conn = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Article</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <?php if (isset($message)) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <a href="admin.php" class="btn btn-primary">Return to Admin Page</a>
</div>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
