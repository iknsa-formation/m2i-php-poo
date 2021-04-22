<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 20/04/2021
 * Time: 09:58
 */
?>
<?php
require_once __DIR__ . '/../base/_header.php';
?>

    <?php if (isset($_GET['user-exists'])) : ?>
    <p class="alert alert-danger">L'utilisateur existe déjà.</p>
    <?php endif; ?>
    <div class="row">
        <h3>Registration</h3>
        <div>
            <form action="/register" method="post">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" name="Itech[User][firstName]" placeholder="John">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="Itech[User][lastName]" placeholder="Doe">
                </div>
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
    </div>

<?php
require_once __DIR__ . '/../base/_footer.php';