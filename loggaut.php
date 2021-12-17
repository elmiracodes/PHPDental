<!-- Fil för utloggning  -->

<?php
// Session will be started to access the session variable
//Will check if session is set
session_start();

if(isset($_SESSION['uname'])){

    // if session is set we destroy this session
    session_destroy();

    echo "<script>location.href='minasidor.php'</script>";
}
else{
    // otherwise it redirects the user to this page 
    echo "<script>location.href='minasidor.php'</script>";
}
?>
