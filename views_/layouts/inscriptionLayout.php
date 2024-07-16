<?php

$name;
$gender;
$email;
$addres;
$city;

$error;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["userName"])){
    $name = $_POST["userName"];
  }
  
  if(isset($_POST["genre"])){
    $gender = $_POST["genre"];
  }
  
  if(isset($_POST["email"])){
    $email = $_POST["email"];
  }
  
  if(isset($_POST["job"])){
    $job = $_POST["job"];
  }

  if((isset($_POST["condition"]))) {
    header('Location: homeLayout.php');
  }

  echo "$name est $job";


}else {
    // header('Location: 404Layout.php');
}

require_once "../partials/head.php";
require_once "../partials/nav.php";

?>

<div class="container">

  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST" class="row g-3">
    <div class="col-12">
      <label for="inputAddress" class="form-label">Nom d'utilisateur</label>
      <input type="text" name="userName" value="<?php if(isset($_POST["userName"])) {echo $_POST["userName"];} ?>" class="form-control" id="inputAddress" placeholder="Bravo1">
    </div>

    <div class="col-12">
      <label class="form-check-label" for="flexRadioDefault1">
        Genre
      </label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" value="Homme" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Homme
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="genre" value="Femme" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Femme
        </label>
      </div>

    </div>

    <div class="col-md-4">
      <label for="inputState" class="form-label">Profession</label>
      <select id="inputState" name="job" value="" class="form-select">
        <option selected>Sans emploi...</option>
        <option>Developper frontend</option>
        <option>Developper backend</option>
        <option>Développeur fullstack</option>
        <option>Responsable projet</option>
      </select>
    </div>

    <div class="form-floating">
      <textarea class="form-control" name="commentaire" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
      <label for="floatingTextarea">Comments</label>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" name="condition" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          J'accepte les conditions d'utilisation
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>



  <!-- <h1>$_GET</h1>
<pre>
  <?php var_dump($_GET) ?>
</pre>

<h1>$_POST</h1>
<pre>
  <?php var_dump($_POST) ?>
</pre>
 -->

</div>

<?php
require_once "../partials/footer.php";
?>