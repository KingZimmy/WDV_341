<?php
    
    $dateInserted = currentDateUSFormat();
    $dateUpdated = currentDateUSFormat();

    function currentDateUSFormat(){
        $date = date_default_timezone_set("America/Chicago");   
        $date = date("m/d/Y");                                   
        return $date;                                           
    }
    
    function currentDateSqlFormat(){
        $date = date_default_timezone_set("America/Chicago");   
        $date = date("Y-m-d");                                  
        return $date;                                           
    }

    if(isset($_POST['submit'])){

        // honeypot validation
        $host = $_POST['events_speaker'];
        if(!empty($host)){
            header("refresh:0");    
        }
        else{
            $eventName = $_POST['events_name'];
            $eventDescription = $_POST['events_description'];
            $eventPresenter = $_POST['events_presenter'];
            $eventDate = $_POST['events_date'];
            $eventTime = $_POST['events_time'];
            $eventDateInserted = currentDateSqlFormat();
            $eventDateUpdated = currentDateSqlFormat();
            
            try {       
                require 'dbConnect.php';	
            
                $sql = "INSERT INTO wdv341_events (";   
                $sql .= "name, ";
                $sql .= "description, ";
                $sql .= "presenter, ";
                $sql .= "date, ";
                $sql .= "time, ";
                $sql .= "date_inserted, ";
                $sql .= "date_updated ";
                $sql .= ") VALUES (";                   
                $sql .= ":eventName, ";
                $sql .= ":eventDescription, ";
                $sql .= ":eventPresenter, ";
                $sql .= ":eventDate, ";
                $sql .= ":eventTime, ";
                $sql .= ":eventDateInserted, ";
                $sql .= ":eventDateUpdated)";
                
                $stmt = $conn->prepare($sql);
                
                $stmt->bindParam(':eventName', $eventName);
                $stmt->bindParam(':eventDescription', $eventDescription);		
                $stmt->bindParam(':eventPresenter', $eventPresenter);		
                $stmt->bindParam(':eventDate', $eventDate);		
                $stmt->bindParam(':eventTime', $eventTime);
                $stmt->bindParam(':eventDateInserted', $eventDateInserted);
                $stmt->bindParam(':eventDateUpdated', $eventDateUpdated);		
                
                $stmt->execute();	   
            }
            
            catch(PDOException $e){
                $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
                error_log($e->getMessage());			
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Self Post Form</title>

<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.scss">
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

    body  {
        background-image: linear-gradient(to left,#42275a, #734b6d);
  height: 100vh;
    }

    h3  {
        text-align:center;
    }
    
    div:nth-child(4){
        display: none;
    }

    input[type=submit],input[type=reset] {
        background-color: #6B3FA0;
        border: none;
        border-radius: 32px;
        color: white;
        padding: 10px 37px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 2px 1px;
        cursor: pointer;
    }

    footer  {
        text-align:center;
        font-weight:bold;
    }

    h1 {
  text-align: center;
  background-color: black;
  color: white;
  padding: 20px;
  margin: 20px auto;
  max-width: 400px;
  border: 2px solid #000;
  border-radius: 10px;
}

.event-info {
        color: white;
    }
    
</style>


</head>
<body>

    <div class="topnav" id="myTopnav">
        
        <a href="admin.php">WDV341 Events</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    
    </div>

   
      <div class="container mt-5">
    <h1 class="text-center">Add an Event</h1>
</div>
    
<div class="jumbotron col-md-4 mx-auto border border-dark rounded-lg m-4 p-4" style="background-color:#000000; border-radius: 10px;">
<div class="event-info">
<?php   
                if(isset($_POST['submit'])){
                  $eventName = $_POST['events_name'];
                  $eventDescription = $_POST['events_description'];
                  $eventPresenter = $_POST['events_presenter'];
                  $eventTime = $_POST['events_time'];
                  $dateInserted = $_POST['events_date_inserted'];

                    echo"<p><h3>Your event has been saved!</h3>
                            Event: $eventName<br>
                            Description: $eventDescription<br>
                            Presenter: $eventPresenter<br>
                            Time: $eventTime<br>
                            Date: $dateInserted<br>
                        </p>";
            
                }
                else{
                }  
            ?>
</div>
    <form name="eventsForm" id="eventsForm" method="post" action="form.php">
  
      <div class="form-group">
        <label for="events_name" class="text-white">Event Name: </label>
        <input type="text" class="form-control form-control-sm" name="name" id="name">
      </div>
  
      <div class="form-group">
        <label for="events_description" class="text-white">Event Description: </label>
        <input type="text" class="form-control form-control-sm" name="description" id="description">
      </div>
  
      <div class="form-group">
        <label for="events_presenter" class="text-white">Event Presenter: </label>
        <input type="text" class="form-control form-control-sm" name="presenter" id="presenter"> 
      </div>
  
      <div class="form-group">
        <label for="events_speaker" class="text-white">Event Speaker: </label>
        <input type="text" class="form-control form-control-sm" name="speaker" id="speaker">
      </div>
  
      <div class="form-group">
        <label for="events_date" class="text-white">Event Date: </label>
        <input type="date" class="form-control form-control-sm" name="date" id="date"> 
      </div>
  
      <div class="form-group">
        <label for="events_time" class="text-white">Event Time: </label>
        <input type="time" class="form-control form-control-sm" name="time" id="time"> 
      </div>
  
      <div class="form-group">
        <label for="events_date_inserted" class="text-white">Event Date Inserted: </label>
        <input type="text" class="form-control form-control-sm" name="date_inserted" id="date_inserted" value="04/18/2023" readonly> 
      </div>
  
      <div class="form-group">
        <label for="events_updated_date" class="text-white">Event Date Updated: </label>
        <input type="text" class="form-control form-control-sm" name="updated_date" id="updated_date" value="04/18/2023" readonly> 
      </div>
  
      <div class="text-center" style="padding:2.5%;">
        <input type="submit" name="submit" id="submit" value="Add Event">
        <input type="reset" name="Reset" id="button" value="Clear Form">
      </div>
  
    </form>
  </div>

  
<footer>
    
    <?php 
    
    echo date("Y");
    
    ?>

</footer>

</body>
</html>