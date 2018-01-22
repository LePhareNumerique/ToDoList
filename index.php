<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ToDoList</title>
        <link rel="stylesheet" type="text/css" href="inc/css/style.css">
    </head>

    <body>
        <h1>ToDoList</h1>

        <br>
        
        <table>
            <tr>
                <th>Date d'ajout</th>
                <th>Tâches</th>
                <th>Commentaires</th>
                <th>Modifs</th>
            </tr>

            <?php
                require 'inc/connect.php';
                
                $reponse = $bdd->query('SELECT id, DATE_FORMAT(date_ajout, \'%d/%m/%Y - %Hh%imin \') AS date_ajout_fr, item, commentaire FROM taches ORDER BY date_ajout_fr DESC');

                while ($donnees = $reponse->fetch()){
            ?>

            <tr>
                <td id='date'><?php echo $donnees['date_ajout_fr']; ?></td>
                <td id='item'><?php echo $donnees['item']; ?></td>
                <td id='com'><?php echo $donnees['commentaire']; ?></td>
                <td class="modifs"><a id="mod" href="pages/update.php?id=<?php echo $donnees['id']; ?> "> Modifier </a><a class="sup" href="process/delete.php?id=<?php echo $donnees['id']; ?>" onclick="Supp(this.href); return(false);"> Supprimer </a></td>
            </tr>

            <?php
                }
            ?>
        </table>
        
        <br>
        
        <a id="ajout" href="pages/create.php">Ajouter une nouvel élément à la liste</a>

        <br>
        <br>

        <script type="text/javascript">
            function Supp(link){
                if(confirm('Confirmer la suppression ?')){
                    document.location.href = link;
                }
            }
        </script>

    </body>
</html>