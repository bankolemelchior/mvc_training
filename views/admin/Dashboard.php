<?php
require_once "../controllers/DashboardController.php";
require_once '../views/partials/head.php';

?>

<body>
    <header>
        <?php require_once '../views/partials/nav.php' ?>
    </header>

    <main>
        <section>
            <h1>Liste des utilisateurs || Total: <?php echo count($allUsers); ?></h1>
            <div class="login-container">
                <table>
                    <?php if(isset($allUsers) && !empty($allUsers)): ?>
                    <thead>
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date d'inscription</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allUsers as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['user_name']); ?></td>
                            <td><?php echo htmlspecialchars($user['user_email']); ?></td>
                            <td><?php echo htmlspecialchars($user['user_role']); ?></td>
                            <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                            <td>
                                <form action="/user-delete?id=<?php echo $user['id']?>;" method="post">
                                    <input type="submit" value="Modifier">
                                    <input type="submit" value="Supprimer">
                                </form>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <?php else: ?>
                        <p>Aucun utilisateur dans la base de données ☂🌂</p>
                    <?php endif ?>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <?php require_once '../views/partials/footer.php' ?>
    </footer>

</body>

</html>