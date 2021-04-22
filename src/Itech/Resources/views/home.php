<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 21/04/2021
 * Time: 16:43
 */
?>

<?php
require_once __DIR__ . '/../base/_header.php';
?>

<h4>My super hot home e-commerce website</h4>

<?php foreach ($data['products'] as $product) : ?>
    <div class="card" style="width: 18rem; margin: 10px">
        <div class="card-body">
            <h5 class="card-title"><?= $product->getTitle() ?></h5>
            <p class="card-text"><?= $product->getPrice() ?></p>
            <a href="/product/<?= $product->getId() ?>" class="btn btn-primary">Voir la fiche</a>
            <a href="#" class="btn btn-primary">Buy me</a>
        </div>
    </div>
<?php endforeach; ?>

<?php
require_once __DIR__ . '/../base/_footer.php';