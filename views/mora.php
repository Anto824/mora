<head onload="reset()">
    <title>Mora</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <meta charset="utf8">
</head>

<body>
    <div id="title">
        <h1>A Mora</h1>
    </div>
    <div id="container">

        <div>
            <p id="gagnant1" hidden>Le joueur 1 a gagné !</p>
            <p id="gagnant2" hidden>Le joueur 2 a gagné !</p>
        </div>
        
        <div id="choixNombre">
            <input type="number" id="joueur1" placeholder="votre nombre">
            <p>L'ordinateur a choisi le nombre : <span id="joueur2"></span></p>
        </div>
        <div id="choixSomme">
            <input type="number" id="somme1" placeholder="votre somme">
            <p>L'ordinateur a choisi la somme : <span id="somme2"></span></p>
        </div>
        <div id="score">
            
            <p id="scorejoueur1">0</p>
            <p>-</p>
            <p id="scorejoueur2">0</p>
        </div>
        <div id="containerBouton">
            <button id="bouton" onclick="jouer()">Jouer</button>
        </div>
    </div>




<script type="text/javascript" src="./script/script.js"></script>
</body>