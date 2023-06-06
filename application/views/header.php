<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">

    <title>Header</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navBar">
            <a class="navbar-brand" href="#"><img src=<?php echo base_url('../img/logo.png'); ?>alt=""></a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="#">Trouver un magasin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Aide</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">S'identifier</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>

      <div class="row">
        <div id="head1">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="#">Ventes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ventes aux enchères</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Location</a>
            </li>
            <li class="nav-item">
              <form id="search">
                <div class="input-group" style="left: 220px;">
                  <input type="text" class="form-control" placeholder="Rechercher">
                  <span class="input-group-text"><a href=""><i class=""></i></a></span>
                </div>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart text-white"></i></a>
            </li>
          </ul>
      </div>

      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
          <div class="collapse navbar-collapse">
            <ul class="nav justify-content-center" style="margin-left: 50px;">
              <li class="nav-item">
                <a class="nav-link" href="#">Catégorie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ajouter produit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nouveau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produits</a>
              </li>
            </ul>
          </div>
      </nav>
      </div>

    </div>
    </div> 
  </body>
</html>
