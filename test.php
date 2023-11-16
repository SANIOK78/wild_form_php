<?php

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['dateOfBirth']) || trim($_POST['dateOfBirth']) === '') 
            $errors[] = "La date de naissance est obligatoire";

        if(empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: success.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

    <main class="container">
        <h1 class="border rounded text-center p-3 m-5 bg-light">Inscription</h1>
        
        <?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) : ?>
                <div class="border border-danger rounded p-3 m-5 bg-danger">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>

        <form method="post" action="" class="border rounded p-3 m-5 bg-light">
            <p>
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </p>

            <p>
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </p>

            <p>
                <label for="dateOfBirth" class="form-label">Date de naissance</label>
                <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
            </p>

            <p class="text-center">
                <button class="btn btn-primary">S'inscrire</button>
            </p>
        </form>
    </main>
    
</body>
</html>