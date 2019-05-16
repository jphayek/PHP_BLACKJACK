<?php


session_start();


function initialistion()
{
    unset($_SESSION["joueur"]);
    unset($_SESSION["croupier"]);
}
