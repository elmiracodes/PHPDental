<!-- Här skapas connection till databasen för att lägga till nya önskemål i databasen-->
<?php

$namn = filter_input(INPUT_POST, 'namn');
$beskrivning = filter_input(INPUT_POST, 'beskrivning');
if (!empty($namn)){
    if(!empty($beskrivning)){
        $host = "localhost";
        $dbusername = "hmm";
        $dbpassword = "nicetrylol";
        $dbname = "nah";

// Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .')'
       . mysqli_connect_error());
    }
else{
    $sql = "INSERT INTO behandlingar (namn, beskrivning)
    values ('$namn','$beskrivning')";

    if ($conn->query($sql)){
        echo "New record is inserted successfully. Go back and ";
    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
}
    else {
        echo "Inkorrekt namninmatning";
        die();
    }
}
else{
    echo "Inkorrekt beskrivningsinmatning";
    die();
}
?>
