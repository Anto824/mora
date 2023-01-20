<?php $title = ''; ?>

<?php ob_start() ?>
    <article>
        <head>
            <h1>Bienvenue</h1>
        </head>
        <body>
            <a href="index.php?action="></a><button>Se connecter pour jouer</button>
        </body>
    </article>
    <hr/>

<?php $content = ob_get_clean(); ?>

<?php require_once 'layout.php'; ?>