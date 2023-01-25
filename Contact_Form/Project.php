<?php

 include ("emailContact.php");    
 include ("emailResponse.php");

function submitDate()  {               
        $date = date("m/d/y");              
        return $date;                       
    }

    function genResponse($selectedReason) {

        if($selectedReason == "Hire A Web Developer") {
            $response = "Hire A Web Developer";
        }

        if(selectedReason == "Schedule Interview") {
            $response = "Schedule Interview";
        }

        if($selectedReason == "Consultation")  {
            $response = "Consultation";
        }
        
        if($selectedReason == "Other")  {
            $response = "Other";
        }
        
        return $response;
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WDV341 Contact Form</title>

        <style>

            body {
                background-color: #519171;
            }

            h1, h2, h3  {
                text-align: center;
            }

            div  {
                background-color:#c3fab8;
                width:960px;
                margin:auto;
                padding:20px;
                border-style:solid;
                border-width: thin;
                border-color: black;
            }

        </style>


</head>

<body>

<div>

<h2>Form submitted successfully!</h2>

<p>
    Dear <?php echo $_POST["firstName"] , ","; ?>
</p>

<p>
    Thank you for your interest and reaching out to me. Your form is being processed. You will recieve a confirmation email at: <?php echo $_POST["email"]; ?></br>
    
    You have selected <?php echo genResponse($_POST["reason"]); ?> as the reason for contact, with the following comments: </br>
    
    <q><?php echo $_POST["comment"]; ?></q>      
</p>

<p>
    You will recieve a confirmation email shortly. I will respond to your inquiry as soon as possible.
</p>

<p>
    Best Wishes, <br>
    
    Mara Mandernach
    
        </p>

        </div>

</body>


</html>