<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice7P7</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 7 partie 7</h1>
                <p class="lead text-center">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
            </div>
            <div class="container-fluid text-center">
                <a href="../exercice1P7/index.php"><button class="button">Exercice 1</button></a>
                <a href="../exercice2P7/index.php"><button class="button">Exercice 2</button></a>
                <a href="../exercice3P7/index.php"><button class="button">Exercice 3</button></a>
                <a href="../exercice4P7/index.php"><button class="button">Exercice 4</button></a>
                <a href="../exercice5P7/index.php"><button class="button">Exercice 5</button></a>
                <a href="../exercice6P7/index.php"><button class="button">Exercice 6</button></a>
                <a href="../exercice7P7/index.php"><button class="button">Exercice 7</button></a>
                <a href="../exercice8P7/index.php"><button class="button">Exercice 8</button></a>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                // On recupère les données du formulaire
                if (isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['file'])) {
                    $info = pathinfo($_POST['file']);
                    $extension = $info['extension'];
                    $filename = $info['filename'];
                    //on affiche ce message avec les données saisie précédement.
                    echo '<p>Bienvenue ' . $_POST['sexe'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' !</p>';
                    echo 'Le nom du fichier est ' . $filename . ' et a pour extension ' . $extension . ' !'; 
                }else{
                    echo 'Veuillez entrer des informations valides !'
                ?>
                    <form method="POST" action="index.php">
                        <!--Création de 2 champs de saisie pour récupérer les donnés. -->
                        <label for="nom"><input type="text" name="nom" value="" placeholder="Entrez votre nom"/></label>
                        <label for="prenom"><input type="text" name="prenom" value="" placeholder="Entrez votre Prénom"/></label>
                        <!--Creation du menu déroulant -->
                            <select name="sexe" size="1">
                                <option>Mr</option>
                                <option>Mme</option>
                            </select>
                        <label><input type="file" name="file" placeholder="Choisir un fichier"></label>
                        <!--Création du bouton d\'envoie des données -->
                        <a href="index.php?nom&prenom&sexe"><input type="submit"></a><br/>
                    </form>
                <?php    
                }
                ?>
            </div>
        </main>
    </body>
</html>
