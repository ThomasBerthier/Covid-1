<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Compatible / UTF / Viewport-->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Style CSS / Script -->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/index.css">
            <script src="main.js"></script>
        <!-- Informations Générales -->
            <title>Projet Full Stack - Classement</title>
            <meta name='description' content='Projet Full Stack - Classement'>
            <meta name='author' content='La Providence - Amiens'>
            <link rel='shortcut icon' href='favicon.ico'>
        <!-- Intégration Facebook -->
            <meta property='og:title' content='Projet Full Stack - Classement'>
            <meta property='og:description' content='Projet Full Stack - Classement'>
            <meta property='og:image' content='favicon.ico'>
        <!-- Intégration Twitter -->
            <meta name='twitter:title' content='Projet Full Stack - Classement'>
            <meta name='twitter:description' content='Projet Full Stack - Classement'>
            <meta name='twitter:image' content='favicon.ico'>
    </head>
    <body class="bodyAccueil">
        
        <?php
            include "session.php";

            // Vérifie que la Session est Valide avec le bon Mot de Passe.
            if($access === true){
                $access = $Joueur1->DeconnectToi();
            }
            // Vérifie qu'il ne s'est pas déconnecté.
            if($access === true){
                ?>

                <?php
            }else{
                echo $errorMessage;
            }
        ?>
            <div class = "classement">

                <h1>Classement</h1>
            
                    <table>
                    
                        <tr>
                            <th>Monstre capturé</th>
                            <th>NFT</th>
                            <th>XP</th>
                            <th>Dégats</th>
                            <th>Vie</th>
                        </tr>

                        <?php
                        
                        ?>

                                <tr>
                                    <td><?php ?></td>
                                    <td><?php ?></td>
                                    <td><?php ?></td>
                                    <td><?php ?></td>
                                    <td><?php ?></td>
                                    <td><?php ?></td>
                                </tr>

                        <?php

                        ?> 

                    </table>

            </div>
    </body>
</html>