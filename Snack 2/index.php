<?php
/* Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che: 
1 - name sia più lungo di 3 caratteri
2 - che mail contenga un punto e una chiocciola
3 - che age sia un numero
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

    

if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
    echo 'Errore, uno o più campi sono vuoti!';
}else{
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    
    if (strpos($email, '@') !== false && strpos($email, '.') !== false && strlen($name) > 3 && is_numeric($age)){

        echo "Accesso riuscito";
    }else{
        echo "Accesso negato";
    }
}
