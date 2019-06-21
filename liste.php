<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description de la page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/styleA.css">
    <link rel="stylesheet" href="css/styleliste.css">




    <!-- Custom CSS -->
    <style>

    </style>

</head>
<body>

    <!-- CONTENT START -->
    <?php
    include ('navbar.php')
    ?>



<div class="container">
    <div class="row">
    <div class="col-12 margetitre">
<h2 class="soustitre"> Liste de BD sur Symfony </h2>
</div>

</div></div>


 <!-- partie liste -->
<div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge1">Mon hebergeur ne me permet pas d'ouvrir un projet Symfony, j'utilise donc cette page pour détailler le projet.</p>
<p>Ce projet est réalisé sur Symfony, il s'agit d'un site comprenant une base de données qu'il est possible de modifier.</p>

  <p>  Le site comprend deux parties, une partie Utilisateur et une partie Administrateur par le biais de laquelle ont peut ajouter, supprimer, ou modifier une bande-dessinées, un auteur, une série ou un éditeur.</p>
 
 <p> Sur la page utilisateur ( voir ci-contre ) la liste des BD apparait directement, on y trouve le titre, l'auteur, la série et l'éditeur.</p>
 </div>
<div class="col-7">
    <img src="img/liste-accueil.jpg" class="pl-5">

</div>

</div></div>



 <!-- partie barbare -->
<div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge2">Un clic sur le titre d'une BD redirige l'utilisateur sur une page qui présente la bande-dessinée par le biais d'un petit résumé.<br>
        Chaque ouvrage comprend également un visuel de la couverture.</p>

  <p>Quelle que soit la page sur laquelle le visiteur navigue le menu propose de revenir à la liste, éffectuer une recherche, accéder à la partie "Admin" ( pour laquelle il faut disposer d'identifiant valide afin d'y accéder ) ou bien changer la langue.</p>
 

 </div>
<div class="col-7">
    <img src="img/liste-barbare.jpg" class="pl-5 mt-5">

</div>

</div></div>

 <!-- partie recherche -->
<div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge2">La partie recherche du site est disponible depuis la partie administrateur ou utilisateur, elle permet de rechercher n'importe quel mot présent dans le titre de la BD ous dans sont résumé.
            <br>Il est également possible de rechercher une série ou bien un auteur.
        Dans le cas d'un scénariste comme dans l'exemple ci-contre on trouvera toutes les bande-dessinéesa uxquelles a contribué le scénariste en question.</p>

  <p>Depuis la section recherche il est également possible en cliquant sur le titre de la BD d'accéder à son résumé et le visuel de sa couverture.</p>
 

 </div>
<div class="col-7">
    <img src="img/liste-recherche.jpg" class="pl-5 mt-5">

</div>

</div></div>


 <!-- partie admin connexion -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge3">Si un utilisateur souhaite accéder à la partie Admin, celui-ci doit s'authentifier avec un identifiant et un mot de passe donnant accès à un compte administrateur.
        
 </div>
<div class="col-7">
    <img src="img/liste-connexion.jpg" class="pl-5 mt-5">

</div>

</div></div>

 <!-- partie admin modifier-base -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge3">Dans la partie administrateur on retrouve la liste des BD, deux boutons sur la droite permettent d'ajouter une nouvelle BD ou d'ajouter un nouvel Editeur à la base de donnée.
            <br>Chaque BD à un bonton permettant de la modifier directement.
        </p>
      
 </div>
<div class="col-7">
    <img src="img/liste-modifier-base.jpg" class="pl-5 mt-5">

</div>

</div></div>

 <!-- partie admin modifier BD -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-5">

        <p class="marge3">Dans la partie modification de BD on retrouve le même formulaire que lorsque l'on veut ajouter une nouvelle bande-dessinée. Il ne reste plus qu'à changer l'image, l'éditeur, le visuel ou le résumé puis enregistrer les modifications.
            <br>Par le biais de cette page il est également possible de supprimer la BD ou de consulter le visuel actuel de la BD. 
        </p>
      
 </div>
<div class="col-7">
    <img src="img/liste-modifier-BD.jpg" class="pl-5 mt-5">

</div>

</div></div>
    <!-- CONTENT END -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>
