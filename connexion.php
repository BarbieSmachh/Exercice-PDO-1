<!-- <?php
//exo 1
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT * FROM clients";
    $resultat = $db->query($requete);
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo $row['lastName'] . ' - ' . $row['firstName'] . '<br>';
    }
} catch (Exception $message) {
    echo $message;
    }
?> -->

<!-- <?php
//exo 2
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT * FROM showtypes";
    $resultat = $db->query($requete);
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo $row['type'].'<br>';
    }
} catch (Exception $message) {
    echo $message;
    }
?> -->

<!-- <?php
//exo 3
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT * FROM clients";
    $resultat = $db->query($requete);
    $count = 0;
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        if ($count >= 20) {
            break; // Sortir de la boucle après 20 éléments
        }

        echo $row['lastName'] . ' - ' . $row['firstName'] . '<br>';
        $count++;
    }
} catch (Exception $message) {
    echo $message;
    }
?> -->


<!-- <?php
//exo 4
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT * FROM clients";
    $resultat = $db->query($requete);
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        if ($row['card'] == 1) {
            echo $row['lastName'] . ' - ' . $row['firstName'] . '<br>';
        }
    }
} catch (Exception $message) {
    echo $message;
    }
?> -->


<!-- <?php
//exo 5
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC";
    $resultat = $db->query($requete);

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "Nom : " . $row['lastName'] . '<br>';
        echo "Prénom : " . $row['firstName'] . '<br>';
        echo '<br>'; // Saut de ligne entre chaque client
    }
} catch (Exception $message) {
    echo $message;
    }
?> -->


<!-- <?php
//exo 6
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT title, performer, date, startTime FROM shows ORDER BY title";
    $resultat = $db->query($requete);

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "Titre : " . $row['title'] . "<br>";
        echo "Artiste : " . $row['performer'] . "<br>";
        echo "Date : " . $row['date'] . "<br>";
        echo "Heure : " . $row['startTime'] . "<br>";
        echo "<br>";
    }

} catch (Exception $message) {
    echo $message;
    }
?> -->

<!-- <?php
//exo 7
'mysql:host=localhost;dbname=colyseum';
try {
    $db=new PDO($dns, $user, $password);
    echo "Conexion etablished successfully".'<br>';
    $requete = "SELECT lastName, firstName, birthDate, card, cardNumber FROM clients ORDER BY id";
    $resultat = $db->query($requete);

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "Nom : " . $row['lastName'] . "<br>";
        echo "Prénom : " . $row['firstName'] . "<br>";
        echo "Date de naissance : ". $row['birthDate']. "<br>";
        if ($row['card'] == 1) {
        echo "Carte de fidélité : " . "oui" . "<br>";
        echo "numéro de carte : " . $row['cardNumber'] . "<br>";
        } else {
        echo "Carte de fidélité : ". "non"."<br>";
    }
        echo "<br>";
    
}

} catch (Exception $message) {
    echo $message;
    }

?>  -->