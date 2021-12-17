<!--En fil som visar prislistan samt Javascript för att visa upp nykundserbjudande -->
<?php
include 'minstil.php';
?>

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Index</title>
    <style>
        table, th, td {
            border: 2px solid white;
            text-align: left;
            color: black;
        }
    </style>

<!-- Javascript funktion för att visa erbjudanden för nya kunder -->
    <script>
        function addelement() {
            var div = document.createElement("div");

            var divHeading = document.createElement("h2");
            divHeading.innerHTML = "Som ny patient hos oss erbjuder vi just nu: <br/> - Undersökning (inkl. 2-4 röntgenbilder) <br/> - Kostnadsberäkning <br/> - Tandstensborttagning. <br/> <br/> För endast 299:-!";
            divHeading.style.backgroundColor = "pink";
            div.appendChild(divHeading);


            var divText = document.createElement("p");
            divText.innerHTML = "Aktuellt erbjudande gäller t.o.m. 5 oktober";
            div.appendChild(divText);
            document.body.appendChild(div)
        }
    </script>
</head>

<!-- Tabell för prislistan -->
<body>
    <br />
    <h1> Prislista </h1>
    <table style="width:50%">
        <tr>
            <th>PRIS</th>
            <th>BESKRIVNING</th>
        </tr>
        <tr>
            <td>845:-</td>
            <td>Basundersökning</td>
        </tr>
        <tr>
            <td>345:-</td>
            <td>Akut undersökning</td>
        </tr>
        <tr>
            <td>3190:-</td>
            <td>Implantat, per styck</td>
        </tr>
        <tr>
            <td>3500:-</td>
            <td>Rotfyllning</td>
        </tr>
        <tr>
            <td>7000:-</td>
            <td>Hel överkäksprotes</td>
        </tr>
        <tr>
            <td>4000:-</td>
            <td>Fyllning av två ytor på molar eller premolar</td>
        </tr>
        <tr>
            <td>8000:-</td>
            <td>Operation avseende käkbensförankrade implantat, ett implantat</td>
        <tr>
            <td>2400:-</td>
            <td>Permanent tandstödd krona, flera i samma käke</td>
        </tr>
        <tr>
            <td>1400:-</td>
            <td>Kirurgisk friläggning av ett implantat vid tvåstegsteknik</td>
        </tr>
        </tr>
    </table>
    <br/> <br/>

 <!-- Formulär för javascriptfunktion -->
    <h1>Nykundserbjudande</h1>
    <form>
        <input type="button" value="Öppna nykundserbjudande" onClick="addelement(); " />
    </form>

</body>
</html>



