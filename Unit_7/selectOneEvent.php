
<?php

include 'dbConnect.php'; //connect to the database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select One Event</title>
    <style>
        .content {
            width: 80%;
            max-width: 1000px;
            margin: auto;
        }
        .flexArea {
            display: flex;
        }
        .flexArea div {
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Selecting One Event from Events Table</h1>
    <div class="flexArea">

<?php

try {

    $sql = "SELECT * FROM wdv341_events WHERE id=2;";
    $stmt = $conn->prepare($sql);   //prepare the statement
    $stmt->execute();               //result object is still in database format

    foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        echo "<div>";
        echo "<p>";
        echo "Event Id: " . $row['id'];
        echo "</p>";
        echo "<p>";
        echo "Event Name: " . $row['name'];
        echo "</p>";
        echo "<p>";
        echo "Event Description: " . $row['description'];
        echo "</p>";
        echo "<p>";
        echo "Event Presenter: " . $row['presenter'];
        echo "</p>";
        echo "<p>";
        echo "Event Date: " . $row['date'];
        echo "</p>";
        echo "<p>";
        echo "Event Time: " . $row['time'];
        echo "</p>";
        echo "<p>";
        echo "Event Date Inserted: " . $row['date_inserted'];
        echo "</p>";
        echo "<p>";
        echo "Event Date Updated: " . $row['date_updated'];
        echo "</p>";
        echo "</div>";
    }

}
catch(PDOException $e) {
    echo "Errors: " . $e->getMessage();
}

?>
</div>
</div>

</body>
</html>