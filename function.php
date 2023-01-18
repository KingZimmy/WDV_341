<!DOCTYPE html>
<html>
<head>
<title>4-1. PHP Functions</title>
<meta charset="UTF-8">
<meta name="description" content="PHP Functions for Unit 4">
<meta name="keywords" content="PHP, HTML, JavaScript, Fuction">
<meta name="author" content="Mara Mandernach">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body> 
    <h1>PHP Functions</h1>
    
    <?php 
    $description = "Welcome to the DMACC Website Development Program";
    $number = "1234567890";

    $date=date_create("2023-01-17");
    echo date_format($date, "m/d/Y") . "<br>";
    echo date_format($date, "d/m/Y") . "<br>";


    function workPlz() {
        global $description;
            echo($description) . "<br>" . "Number of characters in string: ";
            echo strlen($description) . "<br>" . "String trimmed and lower case: ";
            echo strtolower(trim($description)) . "<br>";
            if (stripos($description, 'dmacc') !== false) {
                echo 'This string contains the word: DMACC';
            }
    };
    workPlz();

    function writeNum() {
        global $number;
        echo "<br>" . number_format($number) . "<br>"
    }

    writeNum();

    function showMoney() {
        global $number;
        echo "$" . number_format($number, 2);

    }

    showMoney();

    ?>
    </body>
    </html>
