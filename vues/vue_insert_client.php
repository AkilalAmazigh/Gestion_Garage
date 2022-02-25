<h4>Insertion d'un client</h4>
<form method="post" action="">
    <table  class="table table-hover table-striped table-dark" border="0">
        <tr>
            <td class="align-middle text-center">
                Nom client :</td>
            <td>
                <input type="text" name="nom" value="<?php if($leClient != null) echo $leClient ['nom']; ?>" >
            </td>
        </tr>
        <tr>
            <td class="align-middle text-center">
                Prénom client :
            </td>
            <td>
                <input type="text" name="prenom"value="<?php if($leClient != null) echo $leClient ['prenom']; ?>">
            </td>
            </tr>
            <tr>
            <td class="align-middle text-center">
                Adresse client :
            </td>
            <td>
                <input type="text" name="adresse" value="<?php if($leClient != null) echo $leClient ['adresse'];?>">
            </td>
            </tr>
            <td class="align-middle text-center">
                Email client :
            </td>
            <td>
                <input type="text" name="email" value="<?php if($leClient != null) echo $leClient ['email'];?>">
            </td>
            </tr>
            <td class="align-middle text-center">
                Téléphone client :
            </td>
            <td>
                <input type="text" name="tel" value="<?php if($leClient != null) echo $leClient ['tel'];?>">
            </td>
            </tr>
            <td class="align-middle text-center">
                Mot de passe client :
            </td>
            <td>
                <input type="password" name="mdp" value="<?php if($leClient != null) echo $leClient ['mdp'];?>">
            </td>
            </tr>
            <?php
            if($leClient != null) echo "<input type='hidden' name='idclient' value ='".$leClient['idclient']."'>";
            ?>
            <tr>
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="reset" name="Annuler" value="Annuler">
                </td>
                <td class="align-middle text-center">
                    <input class="btn btn-warning" type="submit" 
                    <?php
                    if($leClient != null) echo 'name="Modifier" value="Modifier"' ;
                    else echo 'name="Valider" value="Valider"'; ?> >
                </td>
            </tr>

    </table>
</form>