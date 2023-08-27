<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Jeux vidéos</title>
  </head>
  <body>
    <main class="container">
        <div class="p-5 mb-4 bg-light rounded-3">
            <h1 class="display-4">Mes jeux vidéos</h1>
            <p class="lead">Voici une petite interface toute simple (grâce à bootstrap) permettant de visualiser les jeux vidéos de ma base de données, mais aussi de les ajouter !</p>
        </div>
        <h1></h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <a href="index.php?order=name" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=editor" class="btn btn-info">Trier par éditeur</a>&nbsp;
                <!-- TODO #2 (optionnel) n'afficher ce bouton que s'il y a un tri -->
                <!-- --- START OF YOUR CODE --- -->
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br>
                <!-- --- END OF YOUR CODE --- -->
                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">&Eacute;diteur</th>
                        <th scope="col">Date de sortie</th>
                        <th scope="col">Console / Support</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- TODO #1 boucler sur le tableau $videogameList contenant tous les jeux vidéos
                    (et donc supprimer ces 2 lignes d'exemple) -->
                    <!-- --- START OF YOUR CODE --- -->
                    <?php foreach ($videogameList as $currentRow) : ?>
                    <tr>
                        <td><?= $currentRow['id'] ?></td>
                        <td><?= $currentRow['name'] ?></td>
                        <td><?= $currentRow['editor'] ?></td>
                        <td><?= $currentRow['release_date'] ?></td>
                        <td><?= $platformList[$currentRow['platform_id']] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- --- END OF YOUR CODE --- -->
                </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">Ajout</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="editor">&Eacute;diteur</label>
                                <input type="text" class="form-control" name="editor" id="editor" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="release_date">Date de sortie</label>
                                <input type="date" class="form-control" name="release_date" id="release_date" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="mb-3">
                                <label for="platform">Console / Support</label>
                                <select class="form-select" id="platform" name="platform">
                                    <option>-</option>
                                    <?php foreach ($platformList as $currentPlaformId=>$currentPlatformName) : ?>
                                    <option value="<?= $currentPlaformId ?>"><?= $currentPlatformName ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
