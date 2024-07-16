<?php 
include '../views2/partials/head.php'; 


?>

<body>
      <header>
       <?php include '../views2/partials/nav.php' ?>
      </header>
        
    <main>
        <div class="login-container">
            <form action="login.php" method="POST">
                <h1>Connexion</h1>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Se connecter">
            </form>
        <section>
            <p>Pas encore membre ?
            <a href="/register" class="btn">S'inscrire</a>
            </p>
        </section>

        </div>
    </main>

    <?php include '../views2/partials/footer.php' ?>

</html>