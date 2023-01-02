<?php ob_start();

    if (isset($patients)){
        foreach ($patients as $patient){
            echo $patient['nom'].' -  '.$patient['prenom'];
        }
    }
    else
        echo 'Pas articles ';

    ?>

    <?php $content = ob_get_clean();
        $title = 'actuesp';
    ?>
    <?php require('base_template.php');  ?>
