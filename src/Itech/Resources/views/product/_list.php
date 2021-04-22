<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 19:10
 */
?>

<?php foreach ($data['products'] as $product) : ?>
    <div class="card" style="width: 18rem; margin: 10px">
        <div class="card-body">
            <h5 class="card-title"><?= $product->getTitle() ?></h5>
            <p class="card-text"><?= $product->getPrice() ?></p>
            <a href="/product/<?= $product->getId() ?>" class="btn btn-primary">Voir la fiche</a>
            <a href="#" class="btn btn-primary">Buy me</a>

            <?php if (isset($_SESSION['security']) && $_SESSION['security']['isLoggedIn']): ?>
                <?php if ($_SESSION['security']['user']->getId() === $product->getUser()->getId()): ?>
                    <a href="/product/edit/<?= $product->getId() ?>" class="btn btn-info"><span class="bi-pencil"></span></a>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
<?php endforeach; ?>
