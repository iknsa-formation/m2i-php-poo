<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 21/04/2021
 * Time: 16:43
 */
?>

<?php
if ($data['security']) {
    echo $data['security']['user']->getFirstName();
}
?>
<br>
<a href="/logout">Deconnexion</a>
<br>
My super hot home page
