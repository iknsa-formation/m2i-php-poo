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
    <div class="row">
        <h3>Ajouter un produit</h3>
        <div>
            <form action="/product/new" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">First name</label>
                    <input type="text" tabindex="1" class="form-control" id="title" name="Itech[Product][title]" placeholder="Asus computer">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Last name</label>
                    <input type="text" tabindex="2" class="form-control" id="price" name="Itech[Product][price]" placeholder="2500.55">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>

<?php
require_once __DIR__ . '/../../base/_footer.php';