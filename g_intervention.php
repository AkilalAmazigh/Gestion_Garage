</br>
</br>
<h3>Gestion des interventions</h3>
</br>
<?php 
if(isset($_SESSION['email']) and $_SESSION['role'] == "admin")
{
$leIntervention = null;
if (isset($_GET['action']) && isset($_GET['idclient']))
{

    if (isset($_GET['action']) && isset($_GET['idintervention']))
    {
        $action = $_GET['action'];
        $idintervention = $_GET['idintervention'];
        switch ($action)
            {
                case 'sup': deleteIntervention($idintervention);
                    break;
                case 'edit': $leIntervention = selectWhereIntervention($idintervention);
                    break;
            }
    }
}    
    $lesVehicules = selectALLVehicules();
    $lesTechniciens = selectALLTechniciens();
    
    require_once ("vues/vue_insert_intervention.php");

    if (isset($_POST['Modifier']))
    {
        updateIntervention($_POST);
        // on recharge la page
        header("Location: Index.php?page=4");   
    }
    if (isset($_POST['Valider']))
    {
        insertintervention($_POST);
    }
}

    if (isset($_POST['Rechercher']))
    {
        $mot = $_POST ['mot'];
        $lesInterventions = searchInterventions($mot);
    }
    else
    {
    $lesInterventions = selectALLInterventions();
    }
    
    require_once ("vues/vue_les_interventions.php");

?>