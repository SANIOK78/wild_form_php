
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
                    <input  type="text"  id="nom"  name="user_name" required>
                </div>
                <div>
                    <label  for="prenom">Prénom :</label>
                    <input  type="text"  id="prenom"  name="firstname" required>
                </div>
                <div>
                    <label  for="tel">Téléphon :</label>
                    <input  type="text" id="tel"  name="telephon">
                </div>
                <div>
                    <label  for="courriel">Email :</label>
                    <input  type="text"  id="courriel"  name="user_email" required>
                </div>
                <div>
                    <label  for="message">Message :</label>
                    <textarea  id="message"  name="message" required></textarea>
                </div>

                <div>
                    <label for="theme">Sujet :</label>
                    <select name="sujet" id="theme" required>
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