<?php
    
    function checkMajor(){
        if ($_POST["selectedMajor"] == ""){
            echo "You have not selected a major.</br>";
        }
        else{
            echo "You have declared " . $_POST['selectedMajor'] . " as your major.<br>";
        }
    }

    function displayProgInfo(){     
        if (isset($_POST["programInfo"]) == 1){
            echo "<li>" . $_POST["programInfo"] . "</li>";
        }
    }

    function displayProgAdvisor(){
        if (isset($_POST["programAdvisor"]) == 1){
            echo "<li>" . $_POST["programAdvisor"] . "</li>";
        }
    }
    
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>

<style>

body {
    background-color: antiquewhite;
}

p {
    border-style: double;
		width:600px;
		margin:auto;
		background-color:lightblue;	
		padding-left: 20px;
}

</style>

</head>

<body>


<p>Dear <?php echo $_POST["first_name"] , ","; ?>

Thank for you for your interest in DMACC.

We have you listed as a <?php echo $_POST["academicStanding"]; ?> starting this fall. 

You have declared <?php echo $_POST["selectedMajor"]; ?> as your major.

Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["email"]; ?> 

  <?php displayProgInfo(); ?>
  <?php displayProgAdvisor(); ?>

You have shared the following comments which we will review:

<?php echo $_POST["comment"] ?>


</p>
</body>
</html>