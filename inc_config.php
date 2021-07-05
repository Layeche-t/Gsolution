
<?php
// start session
if (!isset($_SESSION)) {
    session_start();
}
// connexion base de données 
try {
    global $bdd;
    $bdd = new PDO('mysql:host=localhost;dbname=gsolution;charset=utf8', 'root', '');
    //On définit le mode d'erreur de PDO sur Exception
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// autoloading des classes 
spl_autoload_register(function ($className) {
    $file = 'classes/' . $className . '.php';
    include $file;
});



?>
