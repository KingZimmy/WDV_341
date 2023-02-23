<?php

 include 'dbConnect.php'; //connect to the database

// Create a PHP page called selectEvents.php.  This page will use and SQL SELECT query pull all of the events on your events table.  It will display them in a table on the page.  If there is nothing in your table it will display a message for your client.

//1. Connect the page to your database using the dbConnect file
//2. Create an SQL SELECT command in PDO that uses Prepared Statements to pull all the events from your events table.
//3. Process the SQL command and create a result.  It will include error handling in case your SELECT fails to run properly or the table is empty.
//4. Use a PHP loop to process each row in the result.
//5. Format each row from the result into a table like row. You can build an HTML table, or use CSS Flexbox or CSS Grid layouts to make it look like a table.
//6. Display the final results to the client.

try {

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM wdv341_events";  //SQL syntax and format
$stmt = $conn->prepare($sql);
$stmt->execute(); 

//$result = $stmt->setFetchMode(PDO::FETCH_NUM);    //get result as an associative array
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
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Select Events 7-1</title>
</head>
<body>
    
<h1>Selected Events Table</h1>

<?php

echo "<table style='border:1px solid black';>";
echo "<tr style='border:1px solid red';><th style='border:1px solid red';>Name</th><th style='border:1px solid red';>Description</th><th style='border:1px solid red';>Presenter</th><th style='border:1px solid red';>Date</th><th style='border:1px solid red';>Time</th></tr>";

try {
    
    foreach( $stmt->fetchAll(PDO::FETCH_ASSOC) as $row)  {
        
        echo "<tr style='border:1px solid black';>";
        echo '<td style="border:1px solid black";>',$row['name'],'</td>';
        echo '<td style="border:1px solid black";>',$row['description'],'</td>';
        echo '<td style="border:1px solid black";>',$row['presenter'],'</td>';
        echo '<td style="border:1px solid black";>',$row['date'],'</td>';
        echo '<td style="border:1px solid black";>',$row['time'],'</td>';
        echo '</tr>';
  } 
}

catch(PDOExceptions $e){
    
    echo 'Errors: ' . $e->getMessage();
}

echo '</table>'; 

?>

</body>


</html>