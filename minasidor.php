<!-- Denna fil innehåller formuläret för att logga in på Mina Sidor -->
<?php
include 'minstil.php';
?>

<!DOCTYPE html>
<html>
<head> <title></title>
<style type="text/css">
table {
    margin-top: 150px;
    border: 1px solid;
    background-color: #eee;
}

td{
    border: 0px;
    padding: 10px;
}

th{
    border-bottom 1px solid;
    background-color: #ddd;
}
</style>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1> Mina Sidor </h1>
    <h3>Här på Mina sidor kan du bland annat ändra eller avboka din tid, <br/>lista dig och din familj samt se ditt aktuella tandvårdsstöd. <br/> Fyll i användarnamn och lösenord för att logga in.</h3>


<!-- Formulär för inloggning -->
<!-- The page is redirected to welcome.php when you click the button -->
    <form action="welcome.php" method="post">
<table align="center">
<tr>
<th colspan="2"><h2 align="center"></h2></th>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name="uname"></td>
</tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td align="right" colspan="2"><input type="submit" name="loggain" value="Logga in"></td>
</tr>
</table>
</form>


</body>
</html>

