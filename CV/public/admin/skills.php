<?php

require_once(__DIR__.'/../../src/Admin/login_check.php');

// faire l'import de la table "skills" de la base de données dans $skills.

$connection = new \PDO('mysql:hostname=localhost; dbname=structure', 'root', ''); // <- mettre le bon nom de BDD

$statement = $connection->prepare('SELECT * FROM Skills');
$statement->execute();

$skills = $statement->fetchAll();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Page d'administration compétences</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    

    <style>
        body {
        padding-top: 5rem;
        }
        .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>

  <?php

  require_once(__DIR__.'/../../src/fonctions_PHP/header_admin.php');

  ?>

    <main role="main" class="container">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Valeur</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          <?php   foreach ($skills as $skill) { ?>
          <tr>
            <th scope="row"><?=$skill["id"]?></th>
            <td><?=$skill["nom"]?></td>
            <td><?=$skill["valeur"]?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>


    </main>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </body>
</html>