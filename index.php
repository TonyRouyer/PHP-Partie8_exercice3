<?php
    //si login et password sont set, on crée des cookie
    if (!empty($_POST['login']) && !empty($_POST['password'])){
        setcookie('login', $_POST['login'], time() + 365*24*3600, '/', 'partie8.tr', false);
        setcookie('password', $_POST['password'], time() + 365*24*3600, '/', 'partie8.tr', false);
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Partie 8 exercice 3</title>
    <style>
        form {

            display: flex;
            flex-direction: column;
        }
        label {
            margin: 0 auto;
            margin-top: 10px;
        }
        #sendBtn {
            width: 80px;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="login">Login : <input type="text" name="login" id="login"></label>
        <label for="password">Password : <input type="password" name="password" id="password"></label>
        <input type="submit" value="Envoyer" id="sendBtn">
    </form>
    <p><a href="../index.php">Retour au menu</a></p>
</body>
</html>