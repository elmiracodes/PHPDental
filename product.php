<!-- Denna filen innehåller fakta om tänder och syns bara när man loggat in -->

<?php
//startar sessioner
session_start();

if(isset($_SESSION['uname'])){

   echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";

   echo "<h1>Fakta om tänder </h1>";

    echo"<h2>Tandens byggnad</h2>";

    echo"<p>En tand har rot och krona. Kronan är den del av tanden som syns.</p>";
    
    echo"<p>Den täcks av ett hårt skal, som kallas emalj.Emaljen är kroppens hårdaste vävnad.</p>";
    echo"<p>Om tanden och tandköttet runt tanden är friskt sträcker sig emaljen ner till kanten av tandköttet.</p>";
    echo"<p>Under emaljen finns tandbenet, som även kallas dentin, och tandens mjuka kärna som kallas pulpa. </p>";
    echo"<p>I pulpan finns nerver och blodkärl.</p>";
    echo"<p>Området mellan kronan och roten kallas tandhalsen.</p>";
    echo"<p>Tandens fäste består av tandkött (gingivan), rothinna och rotcement.</p>";
    echo"<p>Rothinnan fäster i käkbenet med små elastiska trådar.</p>";

    echo"<h2>Tändernas namn</h2>";
    echo"<p>Tandläkaren skiljer på incisiver, caniner, premolarer och molarer.</p>";
    echo"<p>Framtänderna kallas incisiver.</p>";
    echo"<p>Hit räknas de fyra tänderna i mitten på överkäken och på underkäken. Du har alltså åtta framtänder.</p>";
    echo"<p>Hörntänderna, de där spetsiga tänderna som kommer näst efter framtänderna, kallas för caniner.</p>";
    echo"<p>Små kindtänderna, premolarerna, har du åtta stycken: Fyra i överkäken, två på varje sida, och likadant i underkäken.</p>";
    echo"<p>Stora kindtänderna, molarerna, sitter längst bak i munnen.</p>";
    echo"<p>Dem har du också åtta stycken av. En molar kallas ibland även för oxeltand.</p>";
    echo"<p>Vidsdomständerna sitter allra längst in, om du har några.</p>";
 
  
}


// Redirects back to Mina Sidor
else {
    echo "<script>location.href='minasidor.php'</script>";
}

?>
