<!DOCTYPE html>
<html lang="fr-fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guide restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <a class="navbar-brand text-white" href="index.php?p=home">Short blind test</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse bg-dark" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-item nav-link text-white active " href="index.php?p=home">Home </a>
          <a class="nav-item nav-link text-white " href="index.php?p=rules">Règle du jeu</a>
          <a class="nav-item nav-link text-white " href="index.php?p=signUp">S'inscrir</a>
          <a class="nav-item nav-link text-white " href="index.php?p=signIn">Se connecter</a>
        </div>
      </div>
    </nav>

  </header>
  <?php echo $content; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>