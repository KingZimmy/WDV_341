<!DOCTYPE html>
<html>
<head>
<title>3-1 PHP Basics</title>
<meta charset="UTF-8">
<meta name="description" content="Lets make some PHP for Unit 3">
<meta name="keywords" content="PHP Basics, HTML, CSS, JS">
<meta name="author" content="Mara Mandernach">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
$yourName = "Mara Mandernach";
$number1 = 20;
$number2 = 40;
$total = 0;

echo "<h1>PHP Basics</h1>";
?>

<h2><?php echo $yourName; ?></h2>
<p>Number 1: <?php echo $number1; ?></p>
<p>Number 2: <?php echo $number2; ?></p>
<p>Total: <?php echo $total = $number1 + $number2; ?></p>
<?php
$language = array ("PHP, ", "HTML, ", "JavaScript");

?>

<script>
    
    let arrLanguage = <?php echo json_encode($language); ?>;
    for(let i = 0; i < arrLanguage.length; i++){
        document.write(arrLanguage[i]);
    }
</script>

</body>
</html>
