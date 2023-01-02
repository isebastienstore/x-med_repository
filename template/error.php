<?php $title = 'error\'s page'; ?>

<?php ob_start(); ?>
<h1>Site des Articles le l'ESP !</h1>
<p>Une erreur est survenue : <?php if (isset($errorMessage) && !empty($errorMessage)) echo $errorMessage?></p>
<?php $content = ob_get_clean(); ?>

<?php require('base_template.php') ?>
