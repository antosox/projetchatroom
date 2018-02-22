<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="formulaire_login.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <?php include "headbootstrap.php" ?>
        <form method="post" action="hallchatroom">
            <table>
                <tr>
                    <th>Identifiant</th>
                    <td>
                        <input type="varchar" min="1" max="100" required name="identifiant">
                    </td>
                </tr>
                <tr>
                    <th>Mot de passe</th>
                    <td>
                        <input type="varchar" min="1" max="100" required name="mdp">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="OK">
                    </td>
                </tr>
    </body>
</html>