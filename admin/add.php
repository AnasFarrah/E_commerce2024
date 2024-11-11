<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `des`, `image`, `promo`) VALUES (NULL, 'HP Gaming 1To', '4520', '10', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, harum', 'https://picsum.photos/200/200', '0')";
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    $res = $pdo->exec($sql);
    var_dump($res);
    ?>
</body>

</html>