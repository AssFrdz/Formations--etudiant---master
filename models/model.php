<?php
include 'data.php';
/**
 * Retourne l'ensemble des formations
 *
 * La première fois la fonction
 * -renvoie les données reçues de dataformation
 * -met ses données en Session
 *
 * Ensuite, elle renvoie le tableau de Session
 *
 * @return array|string[]
 */
function getLesFormations(){
    $d = dataFormation();
    if(!isset($_SESSION['formations'])){
    $_SESSION['formations'] = $d;
    }
    return $_SESSION['formations'];
}

/**
 * Retourne le nom de la formation choisie
 *
 * Les informations proviennent de la session
 *
 * @param $laFormation
 * @return mixed|string
 */
function getUneFormation($laFormation){
    return $_SESSION['formations'][$laFormation];
}

/**
 *
 * ajoute une formation dans le tableau via la Session
 *
 * @param $key
 * @param $value
 * @return void
 */
function setUneFormation($key,$value){
    $_SESSION['formations'][$key] = $value;
}

/**
 *
 *  Test si la connexion est valide
 *  - renvoie vraie si elle l'est
 *  - renvoie faux sinon
 *
 * @param $login
 * @param $mdp
 * @return bool
 */
function getConnexion($login,$mdp){
    $tab=connexion();
    foreach($tab as $tb){
        foreach($tb as $k=>$v){
        if($k==$login){
            if($v==$mdp){
                return true;
            }
        } else{
            return false;
        }
    }
    }
}
