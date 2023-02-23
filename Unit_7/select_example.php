<?php

//database work flow
//  1. Connect to the database
//  2. Create your SQL command
//  3. Prepare you statement
//  4. Bind any parameters as needed
//  5. Execute your SQL command/prepared statement
//  6. Process your result-set/object


//1. Connect to the database, we are using our dbConnect.php
require 'dbConnect.php';     //connect to the database
        //creates a connection object called $conn
        //PHP CANNOT use the . for dot notation, we use the -> sylmbol instead
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//2. Create SQL Command
$sql = "SELECT name, description FROM wdv341_events" WHERE presenter= :presenterName";  //SQL syntax and format

//3. Prepare your statement/statement object 
$stmt = $conn->prepare($sql);  //prepare theSQL statement into the statement object


//4. Bind any parameters, if any
$recordId = 3;
//stmt->bindParam(':recordId',$recordId);
$presenter = "Mara Mandernach";
$stmt->bindParam(':presenterName',$presenter);

//5. Execute your prepared statement
$stmt->execute();     //the $stmt will CATCH the returned result-set/object 

//6. Process the result set/object
$stmt->setFetchMode(PDO::FETCH_NUM);    //get result as an associative array

//$eventArray = $stmt->fetchAll(); //assume this will return an associative array


foreach($eventArray as $value) {
    echo $value;
}

while($row = $stmt->fetch() ){
    echo "<br>";
    echo $row["name"];
    echo $row['description'];
    echo $row['presenter'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Documet</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>SELECT Example</h2>
</body>


</html>
