<?php

require "anniv_functions.php";

?>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
              <p>Joyeux Anniversaire <?=$bDvalue['name']?> !!! <?=$bDvalue['age']?> ans aujourd'hui ça se fête !!!</p>
            <?php endif ?>
          <?php endforeach ?>
        </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>