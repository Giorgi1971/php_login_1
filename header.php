<?php
session_start();
$auth = false;

if(isset($_SESSION["auth"]["user"])){
    $auth = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_Exerciese</title>
    <link rel="stylesheet" href="gio_styles.css">
</head>
<body>

<nav id="nav_header">
<ul>
    <li><a href="home.php">HOME</a></li>
    <li><a href="news.php">NEWS</a></li>
    <li><a href="about-us.php">ABOUT-US</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
if($auth){
    ?>
<ul>
    <li><a href="action/logouting.php">Log-Out</a></li>
</ul>
<?php
}else{?>
<ul>
    <li><a href="register.php">Register</a></li>
    <li><a href="login.php">Log-In</a></li>
</ul>
<?php
}
?>
</nav>

<section>
<?php 

if($auth){
    ?>
        <h1 style="color: darkgreen;">ავტორიზებული მომხმარებელია <?php echo $_SESSION["auth"]["user"][0];?></h1>   
    <?php
}
?> 
