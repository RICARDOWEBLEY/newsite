<?php
    include 'inc/header.php';
    include 'init.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo 'Learn PHP | ' .$string_man. '' ;?></title>
     
</head>
<body>
<div class="container">
<div class="jumbotron bg-secondary text-primary"><?php $name = "Ricardo Webley";  echo '<h1><center>Learn PHP  ' .$string_man. ' </center></h1>'; ?></div>

<?php echo '<h1 class="text-primary">' .$string_man. ' </h1>'; ?>

<?php 

$string1="Employee who came late";
$string2="In class B";

echo $string1 . " name was Mike " . $string2 ;

?>
<?php require 'inc/footer.php'?>
</body>
</html>