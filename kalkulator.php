<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalulator</title>
    <link rel="stylesheet" href="arkusz.css">
</head>
<body>
    


<?php
    $zarobki = $_POST['zarobki'];
    $proc = $_POST['proc'];
    $netto = ($zarobki*(100-$proc))/100;
    echo 'Zarobki netto: '.$netto.' zł';

?>
<br><br><br><br>
<div class="a">
<a href="index.html ">Powrót</a>
</div>

</body>
</html>