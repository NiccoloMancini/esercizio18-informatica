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
        $stampa = "<select>";
        foreach ($film as $film_name) {
            $stampa .= "<option>$film_name</option>";
        }
        $stampa .= "</select>";
        echo $stampa;
    ?>
</body>
</html>