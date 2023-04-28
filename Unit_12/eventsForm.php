

<?php
    
    include 'dbConnect.php';

    try {
        
        $sql = "SELECT * FROM wdv341_events";
        $stmt = $conn->prepare($sql);           //prepare statement
        $stmt->execute();                       //result object is still in database format

        //$result = $stmt->fetch(PDO::FETCH_ASSOC);

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
    <title>WDV341_Admin Side</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>

    <style>


    .navLinks  {
        text-align: center;
    }


    .topnav {
    overflow: hidden;
    background-color: rgb(22, 22, 22);
    text-align:right;
    padding:1%;
    }
  
        .topnav a {
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
  
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
  
        .topnav .icon {
            display: none;
        }   

        body  {
            background-image: linear-gradient(to left,#42275a, #734b6d);
            height: 100vh;
        }

        div#dbContent  {
            width:75%;
            background-color: #734b6d;
            margin:auto;
            padding:2.5%;
            border-radius:5px;
        }

        p  {
            font-weight:bold;
        }

        table  {
            background: black;
            color: black;
        }

        th,
        td {
            border: 1px solid black;
            color: white;
        }

        thead  {
            background-color: black;
        }

        @media screen and (max-width: 1440px)  {
            div#dbContent {
                width:100%;
            }
        }
    </style>
</head>
<body>

<div class="topnav" id="myTopnav">
        
        <a href="../selfPost.php/form.php">Add Event</a>
        <a href="contact/contact.php">Contact</a>
        <a href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        
</div>

    <header>

        <h1 class="text-center">Admin Area</h1>

    </header>

    <div style="overflow-x:auto;" id="dbContent">

    <?php
            if(!empty($_GET['eventId'])){
              $id = $_GET['eventId'];
              $name = $_GET['eventName'];
        ?>
            <h2 class="text-primary text-center">Event Name: <?php echo $name ?> Is Updated</h2>
        <?php 
            }
        ?>
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col">Event Id</th>
                    <th scope="col">Event</th>
                    <th scope="col">Presenter</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <?php
                foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {    
            ?>      
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $result['id']; ?></th>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['presenter']; ?></td>
                        <td><?php echo $result['time']; ?></td>
                        <td><?php echo $result['date']; ?></td>
                        <td><?php echo "<a href=updateEvent.php?eventId=" . $result['id'] . ">Edit</a>" ?></td>
                        <td><?php echo "<a href=deleteEvent.php?eventId=" . $result['id'] . ">Delete</a>" ?></td>

                        <?php 
                            
                        ?>
                    </tr>
                </tbody>
            
            <?php
                }        
            ?>
        </table>  

    </div>

    </body>
</html>