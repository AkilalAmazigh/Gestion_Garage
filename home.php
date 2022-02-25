</br>
</br>
<h3>Accueil du site</h3>
<h4>
    <?php 
    echo "Bienvenue ". $_SESSION['nom']." ".$_SESSION['prenom']; 
    echo "</br> Vous avez le role : ".$_SESSION['role']; 
    ?>
</h4>
</br>
<img src="images/logo.jpg" height="200" width="200">

</br>
</br>
<p>
    Notre garage est le top des garages dans la région. 
</br>Venez nous voir, nous serons ravis de vous accueillir et de vous rendre service.
</p>
<?php
    $nbClient = countClients ();
    $nbTechnicien = countTechniciens ();
    $nbVehicule = countVehicules ();
    $nbIntervention = countInterventions ();
?>
</br>
    <h2>Statistiques de la Base de données</h2>
    <table class="table table-hover table-striped table-dark" border="1">
        <tr>
            <td>Nombre de clients</td>
            <td>Nombre de techniciens</td>
            <td>Nombre de vehicules</td>
            <td>Nombre d'interventions</td>   
        </tr>
        <?php
            echo "<td> ".$nbClient."</td>";
            echo "<td> ".$nbTechnicien."</td>";
            echo "<td>".$nbVehicule."</td>";
            echo "<td>".$nbIntervention."</td>";
            echo "</tr>";
        ?>

    </table>