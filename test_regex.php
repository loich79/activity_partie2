<html>
    <head>
        <meta charset="utf-8">
        <title>test de regex</title>
    </head>
    <body>
        <?php
        //on affecte une valeur à regex avec un test pour la première excution de la page
        if(isset($_POST['regex'])) {
            $regex = $_POST['regex'];
        } else {
            $regex = '';
        }
        //on affecte une valeur à texte avec un test pour la première excution de la page
        if(isset($_POST['texte'])) {
            $texte = $_POST['texte'];
        } else {
            $texte = '';
        }
        ?>
        <!-- affiche le formulaire-->
        <form method="post" action="test_regex.php">
            <p >
                <label for="regex">Expression régulière : </label>
                <input type="text" name="regex" id="regex" value="<?= $regex ?>" />
            </p>
            <p>
                <label for="texte">Texte à tester : </label>
                <input type="text" name="texte" id="texte" value="<?= $texte ?>" />
            </p>
            <p>
                <input type="submit" value="Valider">
            </p>
        </form>
         <!-- test du texte avec l'expression réguliere -->
        <?php 
        // vérification de la présence d'un expression régulière à tester
        if($regex != '') {
            //test du texte avec l'expression régulière
            if (preg_match($regex, $texte))
            {
                echo 'Résultat : vrai';
            }
            else
            {
                echo 'Résultat : faux';
            }
        } 
        ?>
    </body>
</html>

