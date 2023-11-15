
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Formulaire en PHP</title>
    </head>

    <body>
        <div class="form">
            <form  action="thanks.php"  method="post">
                <div>
                    <label  for="nom">Nom :</label>
                    <input  type="text"  id="nom"  name="user_name">
                </div>
                <div>
                    <label  for="prenom">Prénom :</label>
                    <input  type="text"  id="prenom"  name="firstname">
                </div>
                <div>
                    <label  for="tel">Téléphon :</label>
                    <input  type="text" id="tel"  name="telephon">
                </div>
                <div>
                    <label  for="courriel">Courriel :</label>
                    <input  type="email"  id="courriel"  name="user_email">
                </div>
                <div>
                    <label  for="message">Message :</label>
                    <textarea  id="message"  name="message"></textarea>
                </div>

                <div>
                    <label for="theme">Langage de programmation :</label>
                    <select name="langage" id="theme">
                        <option value="">Votre choix </option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="javascript">Java Script</option>
                        <option value="php">Php</option>
                    </select>
                </div>
                <div  class="button">
                    <button  type="submit" name="validate">
                        Envoyer votre message
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>