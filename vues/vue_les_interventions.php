</br>
<h4> Liste des Intervention </h4>
<form method="post" action="">
 Mot de recherche :
<input type="text" name="mot" >
<input type="submit" name="Rechercher" value="Rechercher">
</form>
</br>

<table class="table table-hover table-striped table-dark" border="1">    
    <tr>
        <td> Idintervention</td>
        <td> description</td>
        <td> Date intervention</td>
        <td> Prix de l'intervention'</td>
        <td> Id Véhicule</td>
        <td> Id Technicien</td>
        <td> Opérations</td>
    </tr>
    <?php
    foreach ($lesInterventions as $unIntervention) 
    {
        echo "<tr>";
        echo "<td>".$unIntervention['idintervention']."</td>";
        echo "<td>".$unIntervention['description']."</td>";
        echo "<td>".$unIntervention['dateinter']."</td>";
        echo "<td>".$unIntervention['prix']."</td>";
        echo "<td>".$unIntervention['idvehicule']."</td>";
        echo "<td>".$unIntervention['idtechnicien']."</td>";
        echo"<td>";

        if (isset($_SESSION['email']) and $_SESSION['role']=="admin")
        {
        echo "<a href='index.php?page=4&action=sup&idintervention=".$unIntervention['idintervention']."'>";
        echo "<img src = 'images/sup.jpeg' height='30' width='30'>";
        echo "</a>";

        echo "<a href='index.php?page=4&action=edit&idintervention=".$unIntervention['idintervention']."'>";
        echo "<img src = 'images/edit.png' height='30' width='30'>";
        echo "</a>";
        }
        echo "</td>";
 

        echo "</tr>";
    }

    ?>
</table>