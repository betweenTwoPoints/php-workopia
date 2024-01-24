<?php

use Framework\Session;
?>

<?php $succesMessage = Session::getFlashMessage('succes_message') ?>
<?php if ($succesMessage !== null) : ?>
    <div class="message bg-green-100 p-3 my-3"><?= $succesMessage ?></div>
<?php endif ?>

<?php $errorMessage = Session::getFlashMessage('error_message') ?>
<?php if ($errorMessage !== null) : ?>
    <div class="message bg-red-100 p-3 my-3"><?= $errorMessage ?></div>
<?php endif ?>