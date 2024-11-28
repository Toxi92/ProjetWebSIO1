<?php

$export_config=file_get_contents('config.json');
$config_tab=json_decode($export_config,true);


$hote = $config_tab['hote'];
$nomBDD = $config_tab['nomBDD'];
$client = $config_tab['client'];
$mdp = $config_tab['mdp'];

$connexion=mysqli_connect($hote,$client,$mdp,$nomBDD);

if (!$connexion){
    die("Connexion échouée ". mysqli_connect_error());
} /*else {
    echo"Connexion à la BDD réussie";
}*/

$partenaires_query = "SELECT * FROM partenaires";
$envoie_query = mysqli_query($connexion,$partenaires_query);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Partenaires</title>
        <link id="Style_Theme" href="./Styles/fiche_style1.css" type="text/css" rel="stylesheet">
    
    </head>
    <body>
    <a href="./index.html"><img class="home_ico" src="./Images/home_button.png"></a>
    <main id="main_partenaires">
        <h1 class="GrandTitreAcceuil">Listes partenaires</h1>


<?php

while($row = mysqli_fetch_assoc($envoie_query)){
    echo "<div>";
    echo "<h2>". $row['Nom']."</h2>";
    echo "<a href='" . $row['URL'] . "'><p>" . $row['URL'] . "</p></a>";
    echo "</div>";
}
?>

</main>
        <div class="banderole_bas">
                <a class="mentions_legales" href="./mentions_legale.html"><p>Mentions Légales</p></a>
                <a class="mentions_legales" href="./get_partenaires_by_bdd.php"><p>Sites partenaires</p></a>
                <a class="mentions_legales" href="https://www.youtube.com/watch?v=G3e-cpL7ofc&pp=ygUGI3dlcHVp"><p>Arrêter d'être nul en HTML/CSS ( à regarder )</p></a>
                <a class="mentions_legales" href="./rien.html"><p>Plus trop d'idées</p></a>
            </div>

        <script src="./scripts/changement_theme.js"></script>
    </body>
</html>

