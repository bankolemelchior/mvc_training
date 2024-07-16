<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Ma ToDoList</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <?php include './partials/nav.php' ?>
    </header>

    <main>
        <section>
            <h1>Inscription</h1>
            <div class="login-container">
                <form action="Register.php" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="motdepasse">Mot de passe :</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>

                    <button type="submit" class="btn">S'inscrire</button>
                </form>
            </div>
        </section>
        <section>
            <h2>Connexion</h2>
            <p>Déjà membre ? Connectez-vous pour accéder à vos tâches.</p>
            <a href="/Login.php" class="btn">Se connecter</a>
        </section>
    </main>

    <footer>
        <?php include './partials/footer.php' ?>
    </footer>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;

        }

        header {
            background-color: green;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        section {
            margin-bottom: 2rem;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            max-width: 400px;
            background-color: #fff;
            padding: 5px 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 2rem;
            background-color: #4CAF50;
            color: white;
            margin-top: 1rem;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>

</body>

</html>