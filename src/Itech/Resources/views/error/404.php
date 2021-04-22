<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 15:22
 */
?>

<?php
require_once __DIR__ . '/../../base/_header.php';
?>

<div class="alert alert-info">
    <?php if (isset($data) && isset($data['error'])): ?>
    <p><?= $data['error'] ?></p>
    <?php endif ?>
</div>

<?php
require_once __DIR__ . '/../../base/_footer.php';
?>

