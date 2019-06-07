<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P7</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 7</h1>
                <p class="lead text-center">Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
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
                <!--Création du formulaire avec la methode post et l'action user.php -->
                <form method="POST" action="user.php">
                    <!--Création de 2 champs de saisie pour récupérer les donnés. -->
                    <label for="nom"><input type="text" name="nom" value="" placeholder="Entrez votre nom"/></label>
                    <label for="prenom"><input type="text" name="prenom" value="" placeholder="Entrez votre Prénom"/></label>
                    <!--Création du bouton d'envoie des données -->
                    <a href="index.php?nom&prenom"><input type="submit"></a><br/>
                </form>
            </div>
        </main>
    </body>
</html>
