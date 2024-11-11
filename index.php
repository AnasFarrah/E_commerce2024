<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <?php include("nav.php"); ?>
    <div class="container mt-5">
        <h1>Listes des produits</h1>
        <div class="row">
            <?php
            for ($i = 1; $i < 5; $i++) {
            ?>
                <div class="col-3">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="img-fluid" alt="la photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Asus I7 1To</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                            <a href="#" class="btn btn-success btn-sm">Details</a>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fs"></i>Ajouter</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php include("footer.php"); ?>
    </div>
</body>

</html>