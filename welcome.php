<!--Hit blir man redirectad vid inloggning.. -->
<!-- Welcome.php och Product.php ser man endast om man loggar in -->
<!-- Användarnamn och lösenord är admin och admin -->


<?php

// Set username and password to admin and admin
$uname="admin";
$pwd="admin";

// I start session here
session_start();

// Check if session uname is set or not.
if(isset($_SESSION['uname'])){

    echo "<h1>Välkommen till Mina Sidor ".$_SESSION['uname']."</h1>";
    
    // Redirects till sidan med fakta om tänder
    echo "<br><a href='product.php'><input type=button value='Fakta om tänder' name=fakta></a>";
    
    // Loggar ut dig och redirects you back to the homepage
    echo "<br><a href='hem.php'><input type=button value='Logga ut' name=loggaut></a>";
}

else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){

    $_SESSION['uname']=$uname;

    echo "<script>location.href='welcome.php'</script>";
    }
    else {
        // alert message will show up if username/password are incorrect
        echo "<script>alert(username or password incorrect!')</script>";

        echo "<script>location.href='minasidor.php'</script>";
        }
    }
?>

<?php
include 'minstil.php';
?>


