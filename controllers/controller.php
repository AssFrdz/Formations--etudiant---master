<?php
/** @var string $action */
switch ($action) {
    case 'choisir':
    {
        //Récupération des données du formulaire
        $rep = $_POST['choix'];
        //Récupération des données du modèle
        $laformation=getUneFormation($rep);
        // Envoie des données dans la vue reponse
        include './views/reponse.php';

        break;
    }
    case 'administrer':
    {
        //Récupération des données du formulaire
        $cle = $_POST['cle'];
        $value = $_POST['value'];
        //Envoie des données du modèle
        $action = setUneFormation($cle,$value);
        //appel de la vue accueil
        header('Location: ./index.php');
        break;
    }
    case 'connecter':{
        //appel de la vue connexion
        include './views/connexion.php';
        break;
    }
    case 'valider':{
        //Récupération des données du formulaire
        $log = $_POST['login'];
        $mdp = $_POST['mdp'];
        //Récupération des données du modèle
        $cnx = getConnexion($log,$mdp);
        // Choix de la vue
        if($cnx){
             // vue ajouter si la connexion est correcte
        var_dump($_SESSION['formations']);

            include './views/ajouter.php';
            
        }else{
            // vue connexion sinon
            include './views/connexion.php';
        }
        break;
    }
    default:
    {
        //Récupération des données du modèle
        $formations = getLesFormations();
        define('BASE_PATH', dirname(__DIR__));
        // Envoie des données dans la vue accueil
        include "./views/accueil.php";
    }
}