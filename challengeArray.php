<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Array</title>
</head>
<body>
    <?php
    // faire un tableau qui contient la liste des étudiants et leurs cote

    $ArrayStudent=array("LUC Kawele" => "8", "DORCAS KAZADI" => "10", "KASEYA BEN" => "3", "RUTH MUJINGA" => "9", "Blessing  Tshidjibi" => "2");
    echo"LISTE DES ETUDIANT ET COTE </br> ***************************** </br>";

    foreach($ArrayStudent as $indice => $contenu)

        echo $indice. "  "  .$contenu. "   </br> " ;

    ?>

</body>
</html>