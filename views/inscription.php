<?php $title = ''; ?>

<?php ob_start() ?>
    <article>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/connect.css">
    <title>Connexion - ADAP Studio</title>
</head>
<body>
    <div id="mainContainer">
        <header>
            <h1>ADAP Studio</h1>
        </header>
        <main>
            <div id="connexion">
                <h2>Connexion</h2>
            </div>
            <div id="containerForm">
                <form action="index.php?action=inscription2" method="post">
                    <div>
                        <input type="text" placeholder="Pseudo" id="pseudo" name="user_name">
                    </div>
                    <div>
                        <input type="password" placeholder="Mot de passe" id="password" name="user_password">
                    </div>
                    <div>
                        <button type="submit">Se connecter</button>
                    </div>
                </form>
            
            </div>
        </main>
    </div>
   
</body>
    </article>
    <hr/>

<?php $content = ob_get_clean(); ?>

<?php require_once 'layout.php'; ?>