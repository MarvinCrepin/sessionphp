<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION["user"]) or !$_SESSION["user"]) {
    header("Location: login.php");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php foreach ($_SESSION["articles"] as $articleName => $articleNumber) : ?>
                <li><?= $articleName . " | " . $articleNumber ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>