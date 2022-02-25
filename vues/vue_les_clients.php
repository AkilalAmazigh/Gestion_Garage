</br>
<h4> Liste des clients </h4>
<form method="post" action="">
Mot de recherche :
<input type="text" name="mot" >
<input type="submit" name="Rechercher" value="Rechercher">
</form>
</br>
<table class="table table-hover table-striped table-dark" border="1">    
    <tr>
        <td> Id Client</td>
        <td> Nom Client</td>
        <td> Prénom Client</td>
        <td> Adresse</td>
        <td> Email</td>
        <td> Téléphone</td>
        <td> Opérations</td>
    </tr>
    <?php
    foreach ($lesClients as $unClient) 
    {
        echo "<tr>";

        echo "<td>".$unClient['idclient']."</td>";
        echo "<td>".$unClient['nom']."</td>";
        echo "<td>".$unClient['prenom']."</td>";
        echo "<td>".$unClient['adresse']."</td>";
        echo "<td>".$unClient['email']."</td>";
        echo "<td>".$unClient['tel']."</td>";

        echo "<td>";
        
        if (isset($_SESSION['email']) and $_SESSION['role']=="admin")
        {
        echo "<a href='index.php?page=1&action=sup&idclient=".$unClient['idclient']."'>";
        echo "<img src = 'images/sup.jpeg' height='30' width='30'>";
        echo "</a>";

        echo "<a href='index.php?page=1&action=edit&idclient=".$unClient['idclient']."'>";
        echo "<img src = 'images/edit.png' height='30' width='30'>";
        echo "</a>";
        }

        echo "<a href='index.php?page=1&action=vehicule&idclient=".$unClient['idclient']."'>";
        echo "<img src = 'images/vehicule.jpeg' height='30' width='30'>";
        echo "</a>";

        echo "</td>";


        echo "</tr>";
    }

    ?>
</table>