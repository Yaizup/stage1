<?php
/*
    session_start();
    //constante
    define("DBHOST","chataigner.o2switch.net");
    define("DBUSER","sc2fase4345");
    define("DBPASS","Nathan@2506*MMI");
    define("DBNAME","mmi_site");


    // DSN connexion
    $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;
    // connexion a la base de données 
    try{
        $db=new PDO($dsn,DBUSER,DBPASS);
    // envoie des données en utf8
        $db->exec("SET NAMES utf8");

    }catch(PDOException $e){
        die("Erreur".$e->getMessage());
    }
    //on recupere tout les utilisateurs 
    $sql="SELECT * FROM `users`";
    //on execute la requête
    $requete->query($sql);
    //on recupere les requêtes sql

   $user=$requete->fetch(PDO::FETCH_ASSOC); 
*/ 
?>

<?php
    //constante
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASS","");
    define("DBNAME","mmi_site");


    // DSN connexion
    $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;
    // connexion a la base de données 
    try{
        $db= new PDO($dsn, DBUSER, DBPASS);
        //envoye en utf8
        $db->exec("SET NAMES utf8");

    }catch(PDOException $e){
        die("Erreur".$e->getMessage());
    }
?>