<?php include './partials/head.php' ?>

<body>
    <header>
        <?php include './partials/nav.php' ?>
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
            <a href="/Register.php" class="btn">Inscrivez-vous.</a>
            </p>
        </section>

        </div>
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


        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
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