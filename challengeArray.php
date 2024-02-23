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

    $ArrayStudent=array("LUC Kawele" => 8, "DORCAS KAZADI" => 3, "KASEYA BEN" => 7, "RUTH MUJINGA" => 4, "Blessing  Tshidjibi" => 0, "Harmonie kayiba " => 9.5);
    echo"LISTE DES ETUDIANT ET COTE </br> ***************************** </br>";
    $i=0;
    while ($i <= 10) {

    if (in_array($i, $ArrayStudent)) {
        
        foreach($ArrayStudent as $indice => $i){
            echo '</br></br> <strong> LES ETUDIANT  QUI  ONT </strong>  '.$i .'/10 : </br> </br>  <li> '. $indice;
        

        }
          
    }
        
    $i++;

    break;
    }


   
    ?>

</body>
</html>