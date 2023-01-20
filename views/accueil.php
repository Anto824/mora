<?php $title = ''; ?>

<?php ob_start() ?>
    <article>

    </article>
    <hr/>

<?php $content = ob_get_clean(); ?>

<?php require_once 'layout.php'; ?>