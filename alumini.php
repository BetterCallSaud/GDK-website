<?php include('header1.php');  ?>


<?php

session_start();

if(!isset($_SESSION['loggedinn']) || $_SESSION['loggedinn'] !==true)
{
    header("location: ../login.php");
}


?>

<?php include('footer1.php');  ?>