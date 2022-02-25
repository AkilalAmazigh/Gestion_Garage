<h4>Insertion d'une intervention</h4>
<form method="post" action="">
    <table class="table table-hover table-striped table-dark" border="0">
            <tr>
            <td class="align-middle text-center">
                Description :
            </td>
            <td>
                <textarea name="description" rows="5" cols="40"></textarea value="<?php if($leIntervention != null) echo $leIntervention ['description']; ?>" >
            </td>
             </tr>
            <tr>
            <td class="align-middle text-center">
                Date intervention :
            </td>
            <td>
                <input type="date" name="dateinter" value="<?php if($leIntervention != null) echo $leIntervention ['dateinter']; ?>" >
            </td>
            </tr>
    
            <td class="align-middle text-center">
                Prix intervention :
            </td>
            <td>
                <input type="text" name="prix" value="<?php if($leIntervention != null) echo $leIntervention ['prix']; ?>" >
            </td>
            </tr>
            <td class="align-middle text-center">
                Id Véhicule :
            </td>
            <td>
                <select name="idvehicule">
           
            <?php
               foreach ($lesVehicules as $unVehicule)
               {
                   echo "<option value='".$unVehicule['idvehicule']."'>";
                   echo $unVehicule ['matricule']." ".$unVehicule['marque'];
                   echo "</option>";
               } 
            ?>
                </select>
            </td>
            </tr>
            <td class="align-middle text-center">
                Id Technicien :
            </td>
            <td>
                <select name="idtechnicien">
            
                <?php
               foreach ($lesTechniciens as $unTechnicien)
               {
                   echo "<option value='".$unTechnicien['idtechnicien']."'>";
                   echo $unTechnicien ['nom']." ".$unTechnicien['prenom'];
                   echo "</option>";
               } 
            ?>
            </select>
            </td>
            </tr>
            <?php
            if($leIntervention!= null) echo "<input type='hidden' name='idintervention' value ='".$leIntervention['idintervention']."'>";
            ?>
            <tr>
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="reset" name="Annuler" value="Annuler">
                </td>
         
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="submit" 
                    <?php
                    if($leIntervention != null) echo 'name="Modifier" value="Modifier"' ;
                    else echo 'name="Valider" value="Valider"'; 
                    ?> >
                </td>
            </tr>

    </table>
</form>