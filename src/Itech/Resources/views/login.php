<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 21/04/2021
 * Time: 13:53
 */
?>

<?php
require_once __DIR__ . '/../base/_header.php';
?>

<?php if (isset($_GET['no-user'])) : ?>
    <p class="alert alert-danger">Nous n'avons pas trouver d'utilisateur avec ces informations.</p>
<?php endif; ?>
    <div>
        <form action="/login" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="Itech[User][email]" placeholder="john@doe.con">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="Itech[User][password]" placeholder="Paris">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>

<?php
require_once __DIR__ . '/../base/_footer.php';