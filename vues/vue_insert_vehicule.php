<h4>Insertion d'un vehicule</h4>
<form method="post" action="">
    <table class="table table-hover table-striped table-dark" border="0">
        <tr>
            <td class="align-middle text-center">
                Matricule Vehicule :
            </td>
            <td>
                <input type="text" name="matricule"  value="<?php if($leVehicule != null) echo $leVehicule ['matricule']; ?>" >
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">
                Marque Vehicule :
            </td>
            <td>
                <input type="text" name="marque"  value="<?php if($leVehicule != null) echo $leVehicule ['marque']; ?>" >
            </td>
            </tr>
            <td class="align-middle text-center">
                Date circulation :
            </td>
            <td>
                <input type="date" name="datecirculation"  value="<?php if($leVehicule != null) echo $leVehicule ['datecirculation']; ?>" >
            </td>
            </tr>
            <td class="align-middle text-center">
                NB KM :
            </td>
            <td>
                <input type="text" name="nbkm"  value="<?php if($leVehicule != null) echo $leVehicule ['nbkm']; ?>" >
            </td>
            </tr>
            <td class="align-middle text-center">
                Id Client :
            </td>
            <td>
                <select name="idclient">
            
            <?php
               foreach ($lesClients as $unClient)
               {
                   echo "<option value='".$unClient['idclient']."'>";
                   echo $unClient ['nom']." ".$unClient['prenom'];
                   echo "</option>";
               } 
            ?>
            </select>
            </td>
            </tr>
            <?php
            if($leVehicule != null) echo "<input type='hidden' name='idvehicule' value ='".$leVehicule['idvehicule']."'>";
            ?>
            <tr>
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="reset" name="Annuler" value="Annuler">
                </td>
            
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="submit" <?php
                    if($leVehicule != null) echo 'name="Modifier" value="Modifier"' ;
                    else echo 'name="Valider" value="Valider"'; ?>>
                </td>
            </tr>

    </table>
</form>