<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('Traitement/afficheRecherche'); ?>" method="POST">
    <div>
        <input type="text" placeholder="fenoy" name="mot"><input type="submit" value="recherche">
    </div>
    </form>
    <div class="container">
        <div class="row">
            <?php foreach ($var as $produit) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url(); ?>/assets/img/test.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title"> <?php echo $produit['nom_produit']; ?> </h5>
                            <p class="card-text"> <?php echo $produit['details']; ?> </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>  
    <p><?php echo $this->pagination->create_links(); ?></p>
</body>
</html>