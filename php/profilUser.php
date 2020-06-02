<!DOCTYPE html>

<html>

        <head>

            <link rel="stylesheet" href="../CSS/profilUser.css">
            <title>Profil User</title>

        </head>

        <body>

            <div class="content">
                <div class="userName">
                    <h1><?php
                     $username = " Username";
                      echo "Username :" . $username 
                      ?></h1>
                </div>
             <br>
                <div class="infoUser">
                    <h2><?php 
                    $naissance = "2003";
                    $villeScolariser = "Sulniac";

                    echo "Née en : " . $naissance;
                    echo "<br>";
                    echo "Scolarisée à : " . $villeScolariser;
                    ?> </h2>
                </div>
                <br>
                <button type="button" class="retourBtn" onclick="window.location.href = '../index.php'">Retourner vers l'acceuil</button>

            </div>

        </body>

</html>