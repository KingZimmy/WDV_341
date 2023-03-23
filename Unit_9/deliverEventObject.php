<?php

try {

  
    require "dbConnect.php";
    $sql = "SELECT * FROM wdv341_events WHERE id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    $message = "Something has gone wrong Please seek out your system administrator";

   
    error_log($e->getMessage());
    error_log($e->getLine());
    error_log(var_dump(debug_backtrace()));

}


$outputObj = new stdClass();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $outputObj->eventId = $row['id'];
    $outputObj->eventName = $row['name'];
    $outputObj->eventDescription = $row['description'];
    $outputObj->eventPresenter = $row['presenter'];
    $outputObj->eventDate = $row['date'];
    $outputObj->eventTime = $row['time'];
}


$outputObjJSON = json_encode($outputObj);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Inro to PHP JSON Event Object" author="Mara Mandernach">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Intro to PHP JSON Event Object</title>
</head>

<body>


<p><?php echo $outputObjJSON; ?><p>

</body>

</html>