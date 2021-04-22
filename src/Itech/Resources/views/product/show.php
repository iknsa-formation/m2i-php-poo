<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 15:03
 */
?>

<?php
require_once __DIR__ . '/../../base/_header.php';
?>

<div class="card text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $data['product']->getTitle() ?></h5>
        <p class="card-text"><?= $data['product']->getPrice() ?></p>
        <a href="#" class="btn btn-primary">Acheter</a>
    </div>
</div>

<?php
require_once __DIR__ . '/../../base/_footer.php';
?>
