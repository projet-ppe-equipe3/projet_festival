<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Etablissement Test</title>
    </head>
    <body>
        <?php

        use modele\metier\Etablissement;
        require_once __DIR__ . '/../includes/autoload.php';

        echo "<h2>Test unitaire de la classe métier Etablissement</h2>";
        $objet = new Etablissement('74566416A', 'La Joliverie', '141 route de Clisson', '44230', 'Saint-Sébastien', '0245875566', 'contact@la-joliverie.com', 1, 'Monsieur', 'Bizet', 'P');
        var_dump($objet);
        ?>
    </body>
</html