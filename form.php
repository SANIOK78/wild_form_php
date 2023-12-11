<?php
// Je vérifie que le formulaire est soumis, 
if($_SERVER["REQUEST_METHOD"] === "POST" ){ 

    if(isset($_POST['nom'])) {
        $nom = $_POST['nom'];
    }
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
    }

    if( !empty($_FILES['avatar']['name'])){

        // chemin vers un dossier de stockage sur le serveur 
        $uploadDir = 'public/uploads';
        $tmpName = $_FILES['avatar']['tmp_name'];
    
        // le nom d'origine  
        $fileOrigine = $_FILES['avatar']['name'];
        // le nom unique du fichier
        $newFileName = uniqid()."_".$fileOrigine;
    
        // Je récupère l'extension du fichier
        $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

        // Les extensions autorisées
        $authorizedExtensions = ['jpg','jpeg', 'gif', 'webp'];

        // Le poids max géré par PHP par défaut est de 1M
        $maxFileSize = 1000000;
    
        //  Si l'extension est autorisée
        if( (!in_array($extension, $authorizedExtensions))){
            $errors[] = 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Png !';

            
            // On vérifie si l'image existe et si le poids est autorisé en octets 
        } elseif( file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize){
        
            $errors[] = "Votre fichier doit faire moins de 1M !";

        } else {

            // on déplace le fichier temporaire vers le nouvel emplacement 
            // sur le serveur. Ça y est, le fichier est uploadé
            move_uploaded_file($tmpName, $uploadDir."/".$newFileName);
        }   
    }

    if(isset($_POST['supprimer'])) {

        echo "Supprimer l'image";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload file</title>
        <style>
            form{
                width: 400px;
                padding: 20px;
                margin: 20px;
                box-shadow: 1px 1px 12px rgba(0,0,0,0.5);
            }
            input, label{
                display:block;
            }
            input {padding: 4px}
            label, button{
                margin: 10px 0;
            }
            .profil{
                display: flex;
                width: 600px;
                padding: 20px;
                margin: 20px;
                box-shadow: 1px 1px 12px rgba(0,0,0,0.5);
            }
            .image{
                display: flex;
                flex-direction: column;
                width: 40%;
                height: 240px;
                border:1px solid blue;
                border-radius: 8px;
            }
            .image img{
                width: 100%;
                height:200px;
                object-fit: cover;
            }
            .image button{
                cursor: pointer;
                margin: 10px auto;
            }
            .infos {
                padding: 0 20px;
            }
            .erreur{
                color: red;
            }
        </style>
    </head>

    <body>
        <?php if(isset($errors)) {
            foreach($errors as $error) {
                echo "<p class='erreur'>".$error."</p> <br>" ;
            }
        } ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom complet</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" id="age" name="age">
            </div>
            <div>
                <label for="file">Votre image de profil</label>
                <input type="file" name="avatar" id="file">
            </div>

            <button name="send">Envoyer</button>
        </form>

        <section class="profil">
            <div class="image">
                <img src="public/uploads/<?= $newFileName ;?>" alt="profil">

            </div>
            <div class="infos">
                <p>Nom: 
                    <strong><?php if(isset($nom)) echo $nom ; ?></strong>
                </p>
                <p>Age : <strong><?php if(isset($age)) echo $age ; ?></strong> ans</p>
            </div>
        </section>
    </body>
</html>
