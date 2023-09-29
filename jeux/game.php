<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    <?php require '/wamp64/www/Allsite/navbar/footer.php'; ?>
    <title>Jeux</title>
</head>
<body>

<?php

$nmb = 52;

if(isset($_GET['nmb']))
{
    $user_nmb = (int) $_GET['nmb'];

    if($user_nmb < $nmb)
        echo '<b>perdu !</b> Votre nombre est <b>trop petit</b>. </br> vous 
        avez essaye le nombre : ' . $user_nmb;
    elseif($user_nmb > $nmb)
    echo '<b>perdu !</b> Votre nombre est <b>trop grand</b>. </br> vous 
    avez essaye le nombre : ' . $user_nmb;
    elseif($user_nmb === $nmb)
        echo '<b>C\'est exacte </b> le compte est bon !. </br> le nombre ete : ' . $user_nmb;
}
else
    echo "Essayez de trouve le nombre exate !";
?>

</body>
</html>