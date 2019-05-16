<html>
<head>

<style>

body {
    background-image: url("poker.png");
}

input .submit{
    display:flex;
    justify-content: space-around;
    align-items: space-between;
}

.blackjack {
    color: black;
}
h1{
    display:flex;
}

</style>

</head>


<body style="background-color: seagreen;">
<form method="POST" action="action=blackjack">


<h1 style="color: white;
font-size:70px;">Welcome To <div class="blackjack">Black Jack</div> By JP </h1><br>

<p style="font-size:30px;
color:blue;">Le Black Jack est un jeu de cartes. Pour y jouer, plusieurs paquets de 52 cartes à jouer sont mélangés les uns avec les autres et placés dans une boite que l'on appel le sabot.

Le principe consiste à miser, puis, avec les cartes que vous obtenez à partir du haut du paquet, vous tenter d'atteindre ou de vous rapprocher le plus possible du total de 21 points tout en évitant de le dépasser.

On dit que vous faites un "Black Jack" lorsque que vous obtenez un total de 21 avec seulement 2 cartes.

Vous pouvez additionner les valeurs d'autant de cartes que vous le souhaitez mais si vous dépassez 21 vous perdez votre mise. On dit que vous faites un "Bust" (ou encore que vous "Sautez", "Brulez" ou "Crevez")

Si vous vous arrêtez à un score inférieur ou égal à 21, le croupier joue à son tour pour tenter de battre ou d'égaler votre score :

Si le croupier dépasse 21 ou s'arrête à un score inférieur au votre, vous gagnez :
- une fois et demi votre mise si vous obtenez 21 avec 2 cartes (Black Jack)
- une fois votre mise si vous obtenez 21 avec plus de 2 cartes
- une fois votre mise si votre score est inférieur à 21

Si le croupier parvient à dépassez votre score, vous perdez votre mise.

Si il y a égalité des scores, la partie est nulle et vous récupérez votre mise.
</p>





<?php

include ("../models/cartes.php");

include ("../models/joueurs.php");

include ("../controllers/indexControllers.php");


include ("../models/cartes.php");



?>




</form>
</body>
</html>