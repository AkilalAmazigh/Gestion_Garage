</br>
<h4> Liste des Véhicules </h4>


</br>   

<table class="table table-hover table-striped table-dark" border="1">    
    <tr>
        <td> Idvehicule</td>
        <td> Matricule vehicule</td>
        <td> Marque vehicule</td>
        <td> Date circulation</td>
        <td> NB KM</td>
        <td> Id Client</td>
        <td> Opérations</td>
    </tr>
    <?php
    foreach ($lesVehicules as $unVehicule) 
    {
        echo "<tr>";
        echo "<td>".$unVehicule['idvehicule']."</td>";
        echo "<td>".$unVehicule['matricule']."</td>";
        echo "<td>".$unVehicule['marque']."</td>";
        echo "<td>".$unVehicule['datecirculation']."</td>";
        echo "<td>".$unVehicule['nbkm']."</td>";
        echo "<td>".$unVehicule['idclient']."</td>";
        echo"<td>";

        echo "</tr>";
    }

    ?>
</table>