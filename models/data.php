<?php
/**
 *
 * Renvoie le tableau des formations
 *
 * @return array
 */
function dataFormation(){
    return array(
        'phpinit'=>'Formation PHP - MySQL Initiation',
        'phpinterm'=>'Formation PHP - MySQL Approfondissement',
        'phpavanc'=>'Formation PHP - MySQL Initiation + Approfondissement',
        'c#init'=>'Formation C# - Initiation',
        'c#interm'=>'Formation C# - Approfondissement',
        'c#initobj'=>'Formation C# Initiation : Programmer en objet',
        'c#intermobjet'=>'Formation C# Intermédiaire : Optimiser le modèle objet et utiliser les design patterns',
    );
}

/**
 * Renvoie le tableau des personnes habiiitées à se connecter
 *
 * @return array[]
 *
 */
function connexion(){
    return array(
        1=>array('titi'=>'1234'),
        2=>array('toto'=>'678')
    );
}