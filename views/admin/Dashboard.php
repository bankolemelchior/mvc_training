<?php
require_once "../controllers/DashboardController.php";
require_once '../views/partials/head.php';

   $user = new DashboardController();
   $allUsers = $user->index();
//    var_dump($allUsers);

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
                                <form action="/dashboard-delete?id=<?php echo $user['id']?>;" method="post">
                                    <input type="submit" value="Modifier">
                                    <input type="submit" value="Supprimer">
                                </form>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <?php require_once '../views/partials/footer.php' ?>
    </footer>

</body>

</html>