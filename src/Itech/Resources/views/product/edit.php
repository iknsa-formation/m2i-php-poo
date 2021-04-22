<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 13:47
 */
?>
<?php
require_once __DIR__ . '/../../base/_header.php';
?>

<?php if (isset($_GET['error'])) : ?>
    <p class="alert alert-danger">Une erreur est survenue.</p>
<?php endif; ?>
<?php if (isset($_GET['success'])) : ?>
    <p class="alert alert-success">Le produit est bien mis à jour.</p>
<?php endif; ?>
    <div class="row">
        <h3>Modifier le produit <?= $data['product']->getTitle() ?></h3>
        <div>
            <form action="<?= $data['form']['action'] ?>" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">First name</label>
                    <input
                        type="text"
                        tabindex="1"
                        class="form-control"
                        id="title"
                        name="Itech[Product][title]"
                        placeholder="Asus computer"
                        value="<?= $data['product']->getTitle() ?>"
                    >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Last name</label>
                    <input
                        type="text"
                        tabindex="2"
                        class="form-control"
                        id="price"
                        name="Itech[Product][price]"
                        placeholder="2500.55"
                        value="<?= $data['product']->getPrice() ?>"
                    >
                <div class="mb-3">
                    <label for="sellable" class="form-label">Is Sellable ?</label>
                    <input
                        type="checkbox"
                        tabindex="2"
                        id="sellable"
                        name="Itech[Product][sellable]"
                        <?php if ($data['product']->isSellable()): ?>
                        checked="checked"
                        <?php endif; ?>
                    >
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div>

<?php
require_once __DIR__ . '/../../base/_footer.php';