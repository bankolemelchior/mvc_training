<?php 
require_once "../models/UserModel.php";
require_once '../views2/partials/head.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = htmlentities($_POST["userName"]);
    $email = htmlentities($_POST["email"]);
    $passW = htmlentities($_POST["motdepasse"]);
    var_dump($_POST);
    //Insersion
    $instanceUsers = new UserModel();
    $instanceUsers->create($userName, $passW);

}
?>

<body>
    <header>
        <?php require_once '../views2/partials/nav.php' ?>
    </header>
    <main>
        <section>
            <h1>Inscription</h1>
            <div class="login-container">
                <form action="/register" method="post">
                    <label for="nom">Nom d'utilisateur :</label>
                    <input type="text" id="nom" name="userName" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="motdepasse">Mot de passe :</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>

                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
        </section>
        <section>
            <p>Déjà membre ? <a href="/login" class="btn">Se connecter</a></p>
        </section>
    </main>

    <?php require_once '../views2/partials/footer.php'; ?>
</body>
</html>