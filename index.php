<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strona_Nadawanie_Pelerynek</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <form method="post">
                <input type="text" name="nick" placeholder="Wprowadź Nick">
                <input type="text" name="id" placeholder="Wprowadź ID">
                <button type="submit" name="nadaj">Nadaj</button>
        </form>
</body>
</html>


<?php
if (isset($_POST['nadaj'])) {
$n = $_POST['nick'];
$i = $_POST['id'];


        $capes = '/cape/'.$n.'.png';
        $list = '/getcape/'.$i.'.png';
                if (!copy($list, $capes)) {
                        echo "blad";
                }

}
?>
