<?php 

if(isset($_POST['validate'])) {

    if(!empty($_POST['user_name']) && !empty($_POST['firstname']) && !empty($_POST['user_email'])) {

        $nom = htmlentities($_POST['user_name']);
        $prenom = htmlentities($_POST['firstname']);
        $email = htmlentities($_POST['user_email']);
    }

    if( !empty($_POST['telephon']) && !empty($_POST['message']) && !empty($_POST['langage'])) {

        $phon = htmlentities($_POST['telephon']);
        $message = htmlentities($_POST['message']);
        $langage = htmlentities($_POST['langage']);
    }
    
    // echo "<pre>";
    //     var_dump($_POST);
    // echo "</pre>";

} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Remerciement</title>
    </head>

    <body>
        <div class="container">
            <h1>Remerciement !!!</h1>
            
            <p>Merci <b><?= $nom." ".$prenom ;?> </b>de nous avoir <br>
                contacté à propos de <b><?= $langage;?></b>.
            </p>

            <p>Un de nos conseillers vous contactera soit à l’adresse <b><?= $email;?></b> ou par téléphone
                au <b><?= $phon;?></b> dans les plus brefs délais pour traiter votre demande : 
            </p>

            <div>
                Votre message :<p> <i><?= $message ?></i></p>
            </div> 
        </div>   
    </body>
</html>