<?php
    
    include 'database/dbConnect.php';

    try {
        
        $sql = "SELECT * FROM knowledge_base";
        $stmt = $conn->prepare($sql);           //prepare statement
        $stmt->execute();                       //result object is still in database format

        //$result = $stmt->fetch(PDO::FETCH_ASSOC);

        //echo $results['events_id'];

    }

        catch(PDOExceptions $e){
            echo "Errors: " . $e->getMessage();
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDV341 Final Project - Admin</title>

    <!--- Bootstrap 5 CSS Code -->
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


body  {
            background-color:#F9F9F9;
        }

        div#dbContent  {
            width:75%;
            background-color:white;
            margin:auto;
            padding:2.5%;
            border-radius:5px;
        }

        p  {
            font-weight:bold;
        }

        table  {
            border: 1px solid black;
        }

        thead  {
            background-color: black;
            color: white;
        }

        @media screen and (max-width: 1440px)  {
            div#dbContent {
                width:100%;
            }
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

<br>
<header style="background-color: black; color: white; text-align: center; border-radius: 5px; padding: 10px; max-width: 800px; margin: 0 auto;">
  <h1>PC Repair Shop Admin</h1>
</header>


<div style="overflow-x:auto;" id="dbContent">

<?php
    if(!empty($_GET['kbId'])){
      $id = $_GET['kbId'];
      $name = $_GET['kbtName'];
?>
    <h2 class="text-primary text-center">Knowledge Base Article: <?php echo $name ?> Is Updated</h2>
<?php 
    }
?>
<table class="table"> 
    <thead>
        <tr>
            <th scope="col">Knowledge Base Article Id</th>
            <th scope="col">Knowledge Base Article Title</th>
            <th scope="col">Knowledge Base Article Solution</th>
            <th scope="col">Category</th>
            <th scope="col">KB Creation Date</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>

    <?php
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {    
    ?>      
        <tbody>
            <tr>
                <th scope="row"><?php echo $result['kb_id']; ?></th>
                <td><?php echo $result['kb_title']; ?></td>
                <td><?php echo $result['kb_content']; ?></td>
                <td><?php echo $result['kb_category']; ?></td>
                <td><?php echo $result['kb_created_at']; ?></td>
                <td><?php echo "<a href=update.php?kbId=" . $result['kb_id'] . ">Edit</a>" ?></td>
                <td><?php echo "<a href=delete.php?kbId=" . $result['kb_id'] . ">Delete</a>" ?></td>


                <?php 
                    
                ?>
            </tr>
        </tbody>
    
    <?php
        }        
    ?>
</table>  

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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