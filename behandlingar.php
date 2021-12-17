<!-- Denna fil visar information från databasen, lägger till information i databasen, samt jQuery funktion -->
<?php
include 'minstil.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Behandlingar</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jQuery funktion för den som  söker akuttandvård -->
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideDown("slow");
            });
        });
    </script>

<!-- CSS design -->
<style type="text/css">
  
    #tabellen {
        border-collapse: collapse;
        width: 50%;
        padding: 10px;
        font-family: monospace;
        font-size: large;
        text-align: left;
    }

    #formen {
        padding-top: 70px;
        text-align: center;
        font-size: 20px;
      
    }
    input {
        width: 200px;
        height: 50px;
        font-size: 20px;
    }

    #panel, #flip {
            padding: 5px;
            text-align: center;
            background-color: lightpink;
            border: solid 1px #c3c3c3;
        }

        #panel {
            padding: 50px;
            display: none;
        }

        table, td {
            border: 2px solid white;
            text-align: left;
            color: black;
        }
      th {
          color: pink;
      }
    </style>

</head>
<body>
    <h1> Behandlingar </h1> <br/>
<h2>Här på Dental West utför vi de allra flesta behandlingar <br/>som kan tänkas behövas.
Detta innefattar traditionell <br/>tandvård, behandling av tandvårdsrädda, <br/> olika former
av specialisttandvård samt estetisk tandvård. <h2> <br/>


<div id="flip">Söker du akuttandvård?</div>
    <div id="panel">

        På Dental West i Trollhättan tar vi alltid emot dig med akuta besvär.<br/>
        Ring vårt journummer på 051-396 92 00 för att boka en akuttid.
        <br /> <br />
        <h3> Exempel på akuta tandbesvär: </h3>
        <br />
        Kraftig tandvärk, bultande smärta
        <br />
        Extrema ilningar i tänderna
        <br />
        Visdomstand som gör ont
        <br />
        Skadat tänder vid olycksfall
        <br />
        Slagit ut en permanent tand
        </br>
        Bro eller tandkrona som lossnat
        <br />
        Fyllning eller plomb lossnat
        <br />
        Oförmåga att tugga eller bita
    </div>

    <br />
<table id="tabellen">
<tr>
<th>Id </th>
<th>Namn</th>
<th>Beskrivning</th>
</tr>

<!-- Visar tabell med information om diverse behandlingar, från databasen på webbsidan. -->
<?php
$conn = mysqli_connect("localhost", "elfa0009", "6PMHt3Jf", "elfa0009");
if ($conn-> connect_error) {
    die("Connection failed:" . $conn-> connect_error);
}

$sql = "SELECT id, namn, beskrivning from behandlingar";
$result = $conn-> query($sql);

if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>". $row["id"] ."</td><td>". $row["namn"] ."</td><td>". $row["beskrivning"] ."</td></tr>";
}
echo "</table>";
}
else {
    echo "0 result";
}
$conn-> close();
?>
</table>

<!-- Formulär för att man ska kunna lägga till information till databasen -->
<br/> <br/>
<h1> Har du ett önskemål? </h1>
<form id="formen" method="post" action="connect.php">
Behandling : <input type="text" name="namn"><br><br>
Beskrivning : <input type="text" name="beskrivning"><br>
<input type="submit" value="Skicka">
</form>

<br/><br/>


</body>
</html>



