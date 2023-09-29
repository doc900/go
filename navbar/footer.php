<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/navbar/footer.css">
</head>
<body>
    
</body>
<footer>
<p>Salut je suis steve sabin le createur du site www.gb.com <br>
pour plus info contact nous au numero 50943544521 <br>
Email: sabinsteve9@gmail.com</p>

    <?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
    ?>
    Il y a <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site
</footer>
</html>