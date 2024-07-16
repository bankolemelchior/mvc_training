<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
  .container {
    max-width: 1050px;
    margin: auto;
  }
  header>nav>ul {
    display: flex;
    justify-content: center;
    background-color: #171715;
  }


  li {
    margin: 1.5rem;
    list-style: none;
  }

  li>a {
    color: white;
    text-decoration: none;
  }

  footer>nav>ul {
    display: flex;
    justify-content: start;
    background-color: #605D53;
  }

  footer li {
    margin: 0.5rem;
  }

  footer {
    margin-block: 2.5rem;
  }
</style>

<body>
  <header>
    <nav>
      <ul>
        <li>
          <a href="../layouts/homeLayout.php">Accueil</a>
        </li>
        <li>
          <a href="../layouts/actualiteLayout.php">Mes tâches</a>
        </li>
        <li>
        <a href="../layouts/inscriptionLayout.php">Inscription</a>
        </li>
        <li>
        <a href="../layouts/calculatriceLayout.php">Connexion</a>
        </li>
      </ul>
    </nav>
  </header>


  <main>
    <h1>Le home</h1>
  </main>
</body>


<footer>
    <nav>
    <ul>
        <li>
          <a href="../layouts/homeLayout.php">Accueil</a>
        </li>
        <li>
          <a href="../layouts/actualiteLayout.php">Mes tâches</a>
        </li>
        <li>
        <a href="../layouts/inscriptionLayout.php">Inscription</a>
        </li>
        <li>
        <a href="../layouts/calculatriceLayout.php">Connexion</a>
        </li>
      </ul>
    </nav>
  </footer>