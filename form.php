<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Merci <?php echo  $_POST['user_first_name']?> <?php echo  $_POST['user_last_name']?> de nous avoir contactés à propos de "<?php echo  $_POST['subject']?>".</h1> 
</br>
<p>Un de nos conseillers vous contactera soit à l'adresse <?php echo $_POST['user_email']?> ou par téléphone au <?php echo $_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : </p>
</br>
<?php echo $_POST['user_message']?>


</body>
</html>
