<?php
$ActivePage= "Home";
 include './partials/head.php'; 
 
 
 ?>

<body>
    <header>
        <?php include './partials/nav.php' ?>
    </header>

    <main>
        <section>
            <h1>Bienvenue sur Ma ToDoList</h1>
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
        <?php include './partials/footer.php' ?>
    </footer>

    <style>
    </style>
</body>

</html>