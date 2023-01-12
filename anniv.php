<?php require "anniv_functions.php"; ?>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- jQuery JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <title>Listes des anniversaires</title>
</head>
<body>
  <h1>Listes des anniversaires</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Prénom</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Âge</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($happyBirthday as $bDvalue) : ?>
      <tr>
        <td><?= $bDvalue['name'] ?></td>
        <td><?= $bDvalue['date'] ?></td>
        <td><?= $bDvalue['age'] ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  <div>
    <?php foreach($happyBirthday as $k => $bDvalue) : ?>
      <?php if ($bDvalue['birthday'] === 0): ?>
        <script>popup()</script>
        <!-- Modal -->
        <div class="modal fade" id="global-modal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">🥳 Joyeux anniversaire <?=$bDvalue['name']?> 🎉</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="anniv.gif" alt="gif où il est écrit joyeux anniversaire" title="Joyeux anniversaire <?=$bDvalue['name']?>">
                <h4 class="text-center"><?=$bDvalue['age']?> ans aujourd'hui ça se fête 🎂</h4>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
</body>
</html>

