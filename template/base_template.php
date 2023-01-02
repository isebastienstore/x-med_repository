<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title  ?></title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
    <header>
        <div id="entete">X-MED Pour les soins de santé</div>
        <div id="menu">
                <ul>
                    <li>
                        <a href="Acceuil.php">Accueil</a>
                    </li>
                    <li>
                        <a href="../controller/PatientController.php?action=patient.ajouter">Patient</a>
                    </li>
                    <li>
                        <a href="Acceuil.php?action=prescription.lister">Prescription</a>
                    </li>
                    <li>
                        <a href="Acceuil.php?action=examen">Examen medical</a>
                    </li>
                    <li>
                        <a href="Acceuil.php?action=allergie">Allergie</a>
                    </li>
                </ul>
        </div>
    </header>
        <?= $content  ?>

    <div id="pied">Copyright DIC3 X-MED &copy; Decembre 2022</div>

</html>