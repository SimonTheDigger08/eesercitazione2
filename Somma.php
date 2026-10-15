<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = $_POST["Numero"];
    $i = 1;
    $somma = 0;

    while ($i <= $n) {
        if ($i % 2 == 0) {
            $somma = $somma + $i;
            }
        $i++;
    }

    echo "<h1>";
        echo "Risultato: ";
        echo $somma;
    echo "</h1>"
    ?>
</body>
</html>