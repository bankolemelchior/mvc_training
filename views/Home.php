<?php
$ActivePage= "Home";
 require_once '../views/partials/head.php';
 
 
 ?>

<body>
    <header>
        <?php require_once '../views/partials/nav.php'; ?>
    </header>

    <main>
        <section>
            <h1>Bienvenue 
            <?php if(isset($_SESSION["username"])): ?>
                <strong> <?= $_SESSION["username"] ?> ,</strong>
            <?php endif; ?>
            heureux de vous revoir !
            </h1>
            <p>Organisez votre vie et votre travail avec notre application de gestion de tâches simple et efficace.</p>
        </section>

        <section>
            <h2>À propos</h2>
            <p>Ma ToDoList est une application conçue pour vous aider à gérer vos tâches quotidiennes, améliorer votre
                productivité et simplifier votre vie.</p>
        </section>

        <section>
            <h2>Contact</h2>
            <p>Pour toute question ou assistance, veuillez nous contacter à <a
                    href="mailto:contact@matodolist.com">contact@matodolist.com</a>.</p>
        </section>

        <section>
            <h2>Inscription</h2>
            <p>Rejoignez-nous dès aujourd'hui et commencez à organiser vos tâches !</p>
            <a href="/Register.php" class="btn">S'inscrire</a>
        </section>
    </main>
    <footer>
        <?php require_once '../views/partials/footer.php' ?>
    </footer>

    <style>
    </style>
</body>

</html>