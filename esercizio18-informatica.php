<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film = ["QUARTO POTERE", "CASABLANCA", "TAXI DRIVER", "VIA COL VENTO", "COLAZIONE DA TIFFANY"];
        $stampa = "<select name='filmpreferito'>";
        for($i=1;$i<=count($film); $i++) {
            $stampa .= "<option value='f$i'>" . $film[$i-1] . "</option>";
        }
        $stampa .= "</select>";
        echo $stampa;
    ?>
</body>
</html>