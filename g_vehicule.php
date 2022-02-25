</br>
</br>
<h3>Gestion des vehicules</h3>
</br>
<?php 
if(isset($_SESSION['email']) and $_SESSION['role'] == "admin")
{
    $lesClients = selectAllClients();
    $leVehicule = null;

    if (isset($_GET['action']) && isset($_GET['idvehicule']))
    {
        $action = $_GET['action'];
        $idvehicule = $_GET['idvehicule'];
        switch ($action)
            {
                case 'sup': deleteVehicule($idvehicule);
                    break;
                case 'edit': $leVehicule = selectWhereVehicule($idvehicule);
                    break;
            }
    }

    require_once ("vues/vue_insert_vehicule.php");
    
    if (isset($_POST['Modifier']))
    {
        updateVehicules($_POST);
        // on recharge la page
        header("Location: Index.php?page=2");   
    }
 
    if (isset($_POST['Valider']))
    {
        insertVehicule($_POST);
    }
}
    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST ['mot'];
        $lesVehicules = searchVehicules($mot);
    }
    else
    {
    $lesVehicules = selectAllVehicules();
    }    
    require_once ("vues/vue_les_vehicules.php");
?>