<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/stylecontact.css">
    <link rel="stylesheet" href="css/styleA.css">

    <!-- Custom CSS -->
    <style>

    </style>

</head>
<body>
<h2 class="soustitre"> CONTACT </h2>



<!-- formulaire-->



<section class="container-fluid">
<div class="row">
<div class="container">
<div  class="row">
<div class="col-md-12 text-center">

</div>
</div>

<div class="row">
<!--Message de confirmation d'envoi du mail-->
<?php 
if(isset($_SESSION['success']))
{
  echo '<div class="col-md-6 text-center font-weight-bold mx-auto p-2 rounded alert-success">'.$_SESSION['success'].'</div>';
  session_destroy();
  session_start();
} 
?>
</div>

<div class="row">
<div class="col-md-12" >
<!--Dans la balise form on met la méthode, ici post et l'action ici envoi_mail.php.
envoi_mail est la page qui va executer le code pour vérifier les champs et si tout ok, envoyer le mail.-->
<form method="post" action="envoi_mail.php" class="container">
<div class="form-row" >

<!--Pour chaque champ on va vérifier si il n'y a pas de messages d'erreur si oui on change la couleur du champ et on indique l'erreur
Sinon si le champ a été rempli mais qu'il y a eu une erreur sur d'autre, on récupère la valeur pour l'afficher et éviter à l'utilisateur 
de devoir le renseigner à nouveau. Sinon le formulaire n'a pas encore été soumis donc on affiche les champs normalement.-->
<?php 
//prenom
if(isset($_SESSION['prenomErr']))
{
  echo '<div class="form-group col-md-3">
  <label for="nomprenom" class="p1">Prénom</label>
  <input type="text" class="form-control is-invalid" name="prenom" placeholder="Entrez votre prenom" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
  <div class="invalid-feedback">
  '.$_SESSION['prenomErr'].'</div></div>';
} else {
  if (isset($_SESSION['prenom']))
  {
    echo '<div class="form-group col-md-3">
    <label for="prenom" class="p1">Prénom</label>
    <input type="text" class="form-control is-valid" name="prenom" value ="'.$_SESSION['prenom'].'"style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
    </div>';
  }else{
    echo '<div class="form-group col-md-3">
    <label for="nom" class="p1">Prénom</label>
    <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prenom"style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
    </div>';}}
    
//Nom

if(isset($_SESSION['nomErr']))
{
  echo '<div class="form-group col-md-3">
  <label for="nom" class="p1">Nom</label>
  <input type="text" class="form-control is-invalid" name="nom" placeholder="Entrez votre nom"  style="background-color:transparent; border-color: white; border-width: medium; border-style: solid"> 
  <div class="invalid-feedback">
  '.$_SESSION['nomErr'].'</div></div>';
} else {
  if (isset($_SESSION['nom']))
  {
    echo '<div class="form-group col-md-3">
    <label for="nom" class="p1">Nom</label>
    <input type="text" class="form-control is-valid" name="nom" value ="'.$_SESSION['nom'].'"  style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
    </div>';
  }else{
    echo '<div class="form-group col-md-3">
    <label for="nom" class="p1">Nom</label>
    <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom"  style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
    </div>';}}

    
    
//mail

if(isset($_SESSION['mailErr']))
{
echo '<div class="form-group col-md-6">
<label for="mail" class="p1" >Mail</label>
<input type="email" class="form-control is-invalid" name="mail" placeholder="Entrez votre Mail" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
<div class="invalid-feedback">
'.$_SESSION['mailErr'].'</div></div>';
} else {
if (isset($_SESSION['mail']))
{
echo '<div class="form-group col-md-6">
<label for="mail" class="p1">Mail</label>
<input type="email" class="form-control is-valid" name="mail" value ="'.$_SESSION['mail'].'" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
</div>';
}else{
echo '<div class="form-group col-md-6">
<label for="mail" class="p1">Mail</label>
<input type="email" class="form-control" name="mail" placeholder="Entrez votre Mail"style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">
</div>';}}

//message
// if(isset($_SESSION['messageErr']))
// {
//   echo '<div class="form-group col-md-12">
//   <label for="message" class="p1">Message</label>
//   <textarea class="form-control is-invalid"  name="message" placeholder="Entrez votre message" rows="10" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid"></textarea>
//   <div class="invalid-feedback">
//   '.$_SESSION['messageErr'].'</div></div>';
// } else {
//   if (isset($_SESSION['message']))
//   {
//     echo '<div class="form-group col-md-12">
//     <label for="message" class="p1">Message</label>
//     <textarea class="form-control is-valid"  name="message" rows="10" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid">'.$_SESSION['message'].'</textarea>
//     </div>';
//   }else{
//     echo '<div class="form-group col-md-12">
//     <label for="message" class="p1">Message</label>
//     <textarea class="form-control"  name="message" placeholder="Entrez votre message" rows="10" style="background-color:transparent; border-color: white; border-width: medium; border-style: solid"></textarea>
//     </div>';}}
    
//message
$erreurMessage = '';
$message = '';
$placeholder = 'Entrez votre message';
if(isset($_SESSION['messageErr']))
{
  $classValid = 'is-invalid';
  $erreurMessage = '<div class="invalid-feedback">' . $_SESSION['messageErr'] . '</div>';
} else {
  if (isset($_SESSION['message']))
  {
    $classValid = 'is-valid';
    $message = $_SESSION['message'];
    $placeholder = '';
  }else{
    $classValid = '';
  }
}
?>
<div class="form-group col-md-12">
    <label for="message" class="p1">Message</label>
    <textarea
      class="form-control <?= $classValid ?>"
      name="message"
      rows="10"
      style="background-color:transparent; border-color: white; border-width: medium; border-style: solid"
      placeholder="<?= $placeholder ?>"
      ><?= $message ?></textarea>
    <?= $erreurMessage ?>
</div>
<?php
    
   //On supprime la session en cours
   session_destroy();

      
    ?>
        
     </div>
    <!-- recaptcha -->
      <!-- <div class="row">
      <div class="col-md-3"> 
      <div class="g-recaptcha" data-sitekey="6Ld9kqEUAAAAAAmOrBgPWI3mUUN02ibCxkt2qZg1" style="transform:scale(0.50);-webkit-transform:scale(0.50);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
       <div class="g-recaptcha" data-sitekey="6Ld9kqEUAAAAAAmOrBgPWI3mUUN02ibCxkt2qZg1"></div> -->
   </div> 
        
        <div class="col-md-3 mb-5">  
<button type="submit" class="btn btn-secondary btn-lg btn-block p1" name="envoi">Envoyer</button> 

</form> 
</div>
</div>
</div>   
</div> 
</div>

</section>

<div class="container mb-3">
<div class="row">

  <!--téléphone-->
<div class="col-md-4">
<a href="tel:0621296327"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="52" height="52"
viewBox="0 0 192 192"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#fef2e4"><g id="surface1"><path d="M140.30769,0h-81.23077c-12.23077,0 -22.15385,9.92308 -22.15385,22.15385v147.69231c0,12.23077 9.92308,22.15385 22.15385,22.15385h81.23077c12.23077,0 22.15385,-9.92308 22.15385,-22.15385v-147.69231c0,-12.23077 -9.92308,-22.15385 -22.15385,-22.15385zM92.30769,7.38462h14.76923c2.04808,0 3.69231,1.64423 3.69231,3.69231c0,2.04808 -1.64423,3.69231 -3.69231,3.69231h-14.76923c-2.04808,0 -3.69231,-1.64423 -3.69231,-3.69231c0,-2.04808 1.64423,-3.69231 3.69231,-3.69231zM99.69231,182.97116c-5.22115,0 -9.43269,-4.21154 -9.43269,-9.43269c0,-5.22115 4.21154,-9.43269 9.43269,-9.43269c5.22115,0 9.43269,4.21154 9.43269,9.43269c0,5.22115 -4.21154,9.43269 -9.43269,9.43269zM147.69231,151.38462c0,2.04808 -1.64423,3.69231 -3.69231,3.69231h-88.61538c-2.04808,0 -3.69231,-1.64423 -3.69231,-3.69231v-125.53846c0,-2.04808 1.64423,-3.69231 3.69231,-3.69231h88.61538c2.04808,0 3.69231,1.64423 3.69231,3.69231z"></path></g></g></g></svg>
<span class="p2"> 06-21-29-63-27 </span></a>

</div>
<!--adresse-->
<div class="col-md-4">
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 192 192"
class="floatleft"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#fef2e4"><g id="surface1"><path d="M0,26.88v10.68c11.565,10.065 77.91,67.905 83.16,72.48c5.4,4.71 10.785,5.16 12.84,5.16c2.055,0 7.44,-0.45 12.84,-5.16c5.445,-4.74 75.66,-65.955 83.16,-72.48v-10.68zM0,47.76v96.36l58.08,-45.84c-18.825,-16.38 -45.675,-39.72 -58.08,-50.52zM192,47.76c-11.715,10.2 -38.985,33.9 -58.08,50.52l58.08,45.72zM63.96,103.44l-63.96,50.4v11.28h192v-11.4l-63.96,-50.28c-7.44,6.48 -12.795,11.175 -14.16,12.36c-7.365,6.405 -14.97,7.08 -17.88,7.08c-2.91,0 -10.515,-0.66 -17.88,-7.08c-1.35,-1.17 -6.705,-5.865 -14.16,-12.36z"></path></g></g></g></svg>
<p class="p3"> 10, Quai Général De Gaulle <br>  69250 Albigny-sur-Saône </p>

</div>

<!--mail-->
<a href="mailto:robin.paitry@laposte.net"><div class="col-md-4">
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="52" height="52"
viewBox="0 0 192 192"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#fef2e4"><g id="surface1"><path d="M112.26923,126.54808h-0.69231c-5.30769,14.91346 -14.91346,22.35577 -28.875,22.35577c-10.47116,0 -18.89423,-3.89423 -25.29808,-11.71154c-6.43269,-7.78846 -9.63462,-18.60577 -9.63462,-32.42308c0,-17.85577 4.44231,-32.39423 13.32693,-43.61538c8.85576,-11.19231 19.55769,-16.78846 32.04807,-16.78846c11.30769,0 18.40385,4.55769 21.28847,13.70192h0.46154l1.125,-11.59615h25.58653c-3.40384,33.25961 -5.13461,54.98077 -5.13461,65.22115c0,10.93269 2.88462,16.38462 8.65385,16.38462c6.08654,0 11.07692,-4.15385 15.02884,-12.40384c3.92308,-8.27885 5.91346,-19.09616 5.91346,-32.42308c0,-18.25962 -5.65385,-33.23077 -16.96154,-44.91347c-11.30769,-11.65385 -27.05769,-17.50961 -47.30769,-17.50961c-21.69231,0 -39.72115,7.78846 -54.08653,23.36538c-14.36539,15.57692 -21.54808,34.5577 -21.54808,56.97116c0,21.69231 6.34615,38.76923 19.03846,51.25961c12.72115,12.49038 30.23077,18.75 52.61538,18.75c17.07692,0 32.68269,-3.34615 46.875,-10.06731v22.35577c-12.98077,5.68269 -29.65385,8.53846 -50.04808,8.53846c-28.00961,0 -50.76923,-8.25 -68.30769,-24.75c-17.56731,-16.52885 -26.33654,-38.71154 -26.33654,-66.57692c0,-28.41347 9.375,-52.26923 28.09616,-71.625c18.72115,-19.35577 42.83654,-29.04808 72.34615,-29.04808c27.28846,0 49.38462,7.5 66.25961,22.52884c16.875,15.02885 25.29808,34.84615 25.29808,59.42308c0,20.22116 -5.16346,36.43269 -15.46154,48.66346c-10.32692,12.20192 -23.10577,18.31731 -38.33654,18.31731c-7.5,0 -13.61538,-2.07692 -18.31731,-6.20192c-4.70192,-4.15385 -7.24039,-9.54808 -7.61538,-16.18269zM97.125,64.73077c-6.80769,0 -12.375,4.00962 -16.64423,12c-4.29808,8.01923 -6.43269,17.27885 -6.43269,27.80769c0,7.5 1.47116,13.32693 4.38462,17.50962c2.91346,4.18269 6.66346,6.25961 11.30769,6.25961c7.125,0 12.75,-3.92308 16.84615,-11.82692c4.06731,-7.87501 6.11538,-18.40385 6.11538,-31.58654c0,-6.25961 -1.41346,-11.16346 -4.26923,-14.76923c-2.82693,-3.57692 -6.60577,-5.39423 -11.30769,-5.39423z"></path></g></g></g></svg>
<span class="p2 ml-1"> robin.paitry@laposte.net </span></a>

</div>


</div>
</div>



<!--ligne liens-->
<div class="container">
<div class="row">

  <!--git-->
<div class="col-md-4">
<a href="https://github.com/Robin-Paitry" target="-blank"> 
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="64" height="64"
viewBox="0 0 192 192"
class= "git"
style=" fill:#000000;"><g fill="none" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none" fill-rule="nonzero"></path><g fill="#fef2e4" fill-rule="evenodd"><g id="surface1"><path d="M96,24c-39.77344,0 -72,32.22656 -72,72c0,31.80469 20.625,58.80469 49.24219,68.32031c3.60938,0.65625 4.92188,-1.54688 4.92188,-3.46875c0,-1.71094 -0.07031,-6.23438 -0.09375,-12.23438c-20.03906,4.33594 -24.25781,-9.65625 -24.25781,-9.65625c-3.28125,-8.32031 -7.99219,-10.54687 -7.99219,-10.54687c-6.53906,-4.45313 0.49219,-4.35938 0.49219,-4.35938c7.21875,0.51563 11.01563,7.40625 11.01563,7.40625c6.42187,11.01563 16.85156,7.82813 20.95312,6c0.65625,-4.66406 2.53125,-7.82812 4.57031,-9.63281c-15.98438,-1.80469 -32.78906,-7.99219 -32.78906,-35.57813c0,-7.875 2.8125,-14.29687 7.40625,-19.33594c-0.72656,-1.80469 -3.21094,-9.14063 0.70313,-19.05469c0,0 6.04687,-1.92188 19.80469,7.38281c5.74219,-1.59375 11.90625,-2.39062 18.02344,-2.41406c6.11719,0.02344 12.28125,0.82031 18.02344,2.41406c13.75781,-9.30469 19.78125,-7.38281 19.78125,-7.38281c3.9375,9.91406 1.47656,17.25 0.72656,19.05469c4.61719,5.03906 7.38281,11.46094 7.38281,19.33594c0,27.65625 -16.82813,33.72656 -32.85938,35.53125c2.57813,2.20313 4.875,6.60938 4.875,13.3125c0,9.63281 -0.07031,17.39063 -0.07031,19.75781c0,1.92187 1.28906,4.17187 4.94531,3.46875c28.59375,-9.53906 49.19531,-36.51563 49.19531,-68.32031c0,-39.77344 -32.22656,-72 -72,-72z"></path></g></g></g></svg>
<span class="p2"> Mon Github </span></a>

</div>
<!--behance-->
<div class="col-md-4 ">
<a href="https://www.behance.net/search?content=projects&sort=appreciations&time=week&featured_on_behance=true&search=robin%20paitry"  target="-blank"> 
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 192 192"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#fef2e4"><path d="M34.56,15.36c-10.5984,0 -19.2,8.6016 -19.2,19.2v122.88c0,10.5984 8.6016,19.2 19.2,19.2h122.88c10.5984,0 19.2,-8.6016 19.2,-19.2v-122.88c0,-10.5984 -8.6016,-19.2 -19.2,-19.2zM46.08,69.12h25.845c2.8032,0 17.97,-0.1908 17.97,13.71c0,7.3728 -5.0319,9.8664 -7.2975,10.98c3.3792,1.0752 9.5625,4.1868 9.5625,13.71c0,14.7072 -16.8594,15.36 -19.125,15.36h-26.955zM111.36,69.12h26.88v7.68h-26.88zM57.6,78.45v12.6h12.3675c1.6896,0 7.29,-0.9252 7.29,-6.57c0,-5.6448 -7.2939,-6.03 -8.4075,-6.03zM125.685,80.64c14.976,0 19.0431,11.6727 19.6575,14.4375c0.576,2.8032 0.5775,5.2617 0.5775,8.6025h-30.3375c0,3.3408 1.7703,10.8675 10.7175,10.8675c2.3808,0 4.1427,-0.5739 5.9475,-1.6875c1.7664,-1.1136 2.3865,-2.1939 2.9625,-3.3075h10.095c-1.7664,4.416 -4.1463,7.7628 -7.7175,9.99c-3.5712,2.2272 -7.7184,3.3375 -12.48,3.3375c-2.9952,0 -5.9523,-0.5739 -8.9475,-1.6875c-2.3808,-1.1136 -4.7586,-2.7663 -6.525,-4.4175c-1.7664,-1.6896 -2.9571,-3.9177 -4.1475,-6.6825c-1.1904,-2.2272 -1.8075,-5.5677 -1.8075,-8.3325c0,-2.7648 1.1154,-21.12 22.005,-21.12zM125.685,88.4325c-8.6784,0 -10.1025,8.3349 -10.1025,8.8725h19.05c-0.6144,-2.7648 -3.1107,-8.8725 -8.9475,-8.8725zM57.6,98.73v14.82h12.87c1.10976,0 8.94,-0.3432 8.94,-7.14c0,-6.7584 -6.15216,-7.68 -8.94,-7.68z"></path></g></g></svg>
<span class="p2"> Mon Behance </span></a>

</div>

<!--linkedin-->
<div class="col-md-4 ">
<a href="https://www.linkedin.com/in/robin-paitry-65756273/" target="-blank"> 
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 192 192"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#fef2e4"><path d="M157.44,15.36h-122.88c-10.5984,0 -19.2,8.6016 -19.2,19.2v122.88c0,10.5984 8.6016,19.2 19.2,19.2h122.88c10.5984,0 19.2,-8.6016 19.2,-19.2v-122.88c0,-10.5984 -8.6016,-19.2 -19.2,-19.2zM65.28,76.8v72.96h-23.04v-72.96zM42.24,55.5648c0,-5.376 4.608,-9.4848 11.52,-9.4848c6.912,0 11.2512,4.1088 11.52,9.4848c0,5.376 -4.3008,9.7152 -11.52,9.7152c-6.912,0 -11.52,-4.3392 -11.52,-9.7152zM149.76,149.76h-23.04c0,0 0,-35.5584 0,-38.4c0,-7.68 -3.84,-15.36 -13.44,-15.5136h-0.3072c-9.2928,0 -13.1328,7.9104 -13.1328,15.5136c0,3.4944 0,38.4 0,38.4h-23.04v-72.96h23.04v9.8304c0,0 7.4112,-9.8304 22.3104,-9.8304c15.2448,0 27.6096,10.4832 27.6096,31.7184z"></path></g></g></svg>
<span class="p2 ml-1"> Mon Linkedin </span></a>

</div>


</div>
</div>


    <!-- CONTENT START -->
    <?php
    include ('navbar.php')
    ?>
    <!-- CONTENT END -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/recap.js"></script>

</body>
</html>