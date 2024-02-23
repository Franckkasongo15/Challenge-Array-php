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

    $ArrayStudent=array("LUC Kawele" => 8,"Dan mwanza" => 8, "DORCAS KAZADI" => 3, "JOHN KADI" => 3, "KASEYA BEN" => 7, "RUTH MUJINGA" => 4, "Blessing  Tshidjibi" => 0, "Harmonie kayiba " => 9.5, "YVES " => 9.5);
    echo"LISTE DES ETUDIANT ET COTE </br> ***************************** </br>";
    $i=0;
    $etudiantsParNote = array();
    foreach ($ArrayStudent as $etudiant => $note) {
        $etudiantsParNote[$note][] = $etudiant;
    }
    
    foreach ($etudiantsParNote as $note => $etudiants) {
        echo '</br></br> <strong> LES ETUDIANT QUI ONT ' . $note . '/10 : </strong> </br> </br>';
        foreach ($etudiants as $etudiant) {
            echo '<li>' . $etudiant;
        }
    }
    ?>
</body>
</html>