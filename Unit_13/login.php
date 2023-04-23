<?php
session_start();

$errMsg = "";
$validUser = false;
$inUserName = "";

if (isset($_POST['submit'])) {
    $loginName = $_POST['inUserName'];
    $loginPW = $_POST['inPassword'];

    try {
        require "dbConnect.php";

        $sql = "SELECT event_user_name, ";
        $sql .= "event_user_password ";
        $sql .= "FROM wdv_341_event_users";
        $sql .= "WHERE event_user_name=:userName ";
        $sql .= "AND event_user_password=:userPW";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':userName', $loginName);
        $stmt->bindParam(':userPW', $loginPW);

        $stmt->execute();

        $resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($resultArray);

        $numRows = count($resultArray);

        if ($numRows == 1) {
            $_SESSION['validUser'] = true;
            $validUser = true;
            $inUserName = $loginName;
        } else {
            $errMsg = "Invalid username/password. Please try again.";
        }
    } catch (PDOException $e) {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Login</title>
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        .errorFormat {
            color: red;
        }

        body {
            background-image: linear-gradient(to left, #42275a, #734b6d);
            height: 100vh;
        }

        h1,
        h3 {
            text-align: center;
        }

        form {
            background-color: black;
            color: white;
            width: 500px;
            border-radius: 5px;
            padding: .5%;
            margin: auto;
        }

        div {
            padding: 1%;
        }

        #vaildUsers  {
            background-color:lightgrey;
            width:500px;
            border-radius:5px;
            padding:.5%;
            margin:auto;
        }

    </style>
</head>
<body>


<h1 style="color: black">Event Login System</h1>

        <?php

            if($validUser){
                var_dump($validUser);
            ?>

            <div style="background-color:lightgrey; width:500px; border-radius:5px; padding:.5%; margin:auto;">

                <h3>Welcome to the admin area for valid users</h3>

                <p>You have the following options available as an administrator</p>

                <ol>
                    <li><a href="../selfPost.php/form.php">Input new products</a></li>
                    <li>delete products from database</li>
                    <li>Select products from database</li>
                    <li><a href="logout.php">Log off of admin system</a></li>
                </ol>

            </div>

            <?php
            }
            else  {
                echo "<h3>$errMsg</h3>";
            ?>
    <form method="post" action="login.php">
    
        
        <div class="form-group">
            <label for="inUserName">Username: </label>
            <input type="text" class="form-control form-control-sm" name="inUserName" id="inUserName" placeholder="Username">
            <span class="errorFormat"><?php echo $errMsg; ?></span>
        </div>
        
        <div class="form-group">

            <label for="inPassword">Password: </label>
            <input type="password" class="form-control form-control-sm" name="inPassword" id="inPassword">
        </div>
        <div>
            <input type="submit" name="submit" value="Sign In">
            <input type="reset">
        </div>
    </form>
<?php 
    }
?>
</body>
</html>