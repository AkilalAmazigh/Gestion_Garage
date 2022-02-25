<?php

    function connexion ()
    {
        $con = mysqli_connect("localhost", "root", "", "garage_250");
        if ($con == null)
        {
            echo "Erreur de connexion à la bdd";
        }
        return $con;
    }
    function deconnexion ($con)
    {
        mysqli_close($con);
    }
    /******** client *****/

    /**** fonction 1 ****/

    function selectAllClients ()
    {
        $requete = "select * from client ;";
        $con = connexion ();
        if ($con)
        {
            $lesClients = mysqli_query($con, $requete);
            //var_dump($lesClients);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesClients;   
    }

    /**** fonction 2 ****/

    function insertClient ($tab)
    {
        $requete = "insert into client values(null,'".$tab['nom']."','".$tab['prenom']."','".$tab['adresse']."','".$tab['email']."','".$tab['mdp']."','".$tab['tel']."');";
        //echo $requete;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

    /**** fonction 3 ****/
    
    function deleteClient ($idclient)
    {
        $requete = "delete from client where idclient = ".$idclient ;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }
    
    /**** fonction 4 ****/

    function selectWhereClient ($idclient)
    {

        $requete = "select * from client where idclient = ".$idclient ;
        $con = connexion ();
        if ($con)
        {
            $lesClients = mysqli_query($con, $requete);
            $unClient = mysqli_fetch_assoc($lesClients); 
            //var_dump($lesClients);
        }
        else 
        {
            return null;
        }
           deconnexion($con);
        
           return $unClient;   
    
    }
    /**** fonction 5 ****/

    function updateClient ($tab)
    {

        $requete = "update client set nom = '".$tab ['nom']."', prenom = '".$tab ['prenom']."', adresse = '".$tab ['adresse']."', email = '".$tab ['email']."', mdp = '".$tab ['mdp']."', tel = '".$tab ['tel']."' where idclient = ".$tab['idclient'] ;
        $con = connexion ();
        if ($con)
        {
           mysqli_query($con, $requete);
           
        }
        else 
        {
            return null;
        }
           deconnexion($con);
      
    
    }
    /**** fonction 6 ****/

    function searchClients($mot)
    {
        $requete = "select * from client where nom like '%".$mot
        ."%' or prenom like '%".$mot."%' or adresse like '%".$mot. "%' or email like '%".$mot."%' or tel like '%".$mot."%' ; ";
        $con = connexion ();
        if ($con)
        {
            $lesClients = mysqli_query($con, $requete);
        }
        else 

        {
          return null; 
        }
        deconnexion($con);
        return $lesClients;   
    }

    /**** fonction 7 ****/

    function countClients()
    {
        $requete = "select count(*) as nb from client ; ";

        $con = connexion ();
        if ($con)
        {
            $resultat = mysqli_query($con, $requete);
            $nb = mysqli_fetch_assoc($resultat);
           
        }
        else
        {
            return null;
        }
        
        deconnexion($con);
        
        return $nb['nb'];
    }
    /**** fonction 8 ****/

    function selectVehiculesClients ($idclient)
    {
        $requete = "select * from vehicule where idclient=".$idclient;
        $con = connexion ();
        if ($con)
        {
            $lesVehicules = mysqli_query($con, $requete);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesVehicules;  
        
    }


    /*************** technicien **********/

    /**** fonction 1 ****/
    
    function selectAllTechniciens ()
    {
        $requete = "select * from technicien ;";
        $con = connexion ();
        if ($con)
        {
            $lesTechniciens = mysqli_query($con, $requete);
            //var_dump($lestechnicien);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesTechniciens;
           
    }

    /**** fonction 2 ****/

    function inserttechnicien ($tab)
    {
        $requete = "insert into technicien values(null,'".$tab['nom']."','".$tab['prenom']."','".$tab['qualification']."','".$tab['email']."','".$tab['tel']."','".$tab['tel']."');";
        //echo $requete;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

    /**** fonction 3 ****/
    
    function deleteTechnicien ($idtechnicien)
    {
        $requete = "delete from technicien where idtechnicien = ".$idtechnicien ;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

    /**** fonction 4 ****/

    function selectWhereTechnicien ($idtechnicien)
    {

        $requete = "select * from technicien where idtechnicien = ".$idtechnicien ;
        $con = connexion ();
        if ($con)
        {
            $lesTechniciens = mysqli_query($con, $requete);
            $unTechnicien = mysqli_fetch_assoc($lesTechniciens); 
            //var_dump($lesClients);
        }
        else 
        {
            return null;
        }
           deconnexion($con);
        
           return $unTechnicien;   
    
    }
    /**** fonction 5 ****/

    function updateTechnicien ($tab)
    {

        $requete = "update technicien set nom = '".$tab ['nom']."', prenom = '".$tab ['prenom']."', qualification = '".$tab ['qualification']."', email = '".$tab ['email']."', mdp = '".$tab ['mdp']."', tel = '".$tab ['tel']."' where idtechnicien = ".$tab['idtechnicien'] ;
        $con = connexion ();
        if ($con)
        {
           mysqli_query($con, $requete);
           
        }
        else 
        {
            return null;
        }
           deconnexion($con);
      
    
    }
    /**** fonction 6 ****/

    function searchTechniciens($mot)
    {
        $requete = "select * from technicien where nom like '%".$mot
        ."%' or prenom like '%".$mot."%' or qualification like '%".$mot. "%' or email like '%".$mot."%' or tel like '%".$mot."%' ; ";
        $con = connexion ();
        if ($con)
        {
            $lesTechniciens = mysqli_query($con, $requete);
        }
        else 

        {
          return null; 
        }
        deconnexion($con);
        return $lesTechniciens;   
    }
       /**** fonction 7 ****/

       function countTechniciens()
       {
           $requete = "select count(*) as nb from technicien ; ";
   
           $con = connexion ();
           if ($con)
           {
               $resultat = mysqli_query($con, $requete);
               $nb = mysqli_fetch_assoc($resultat);
              
           }
           else
           {
               return null;
           }
           
           deconnexion($con);
           
           return $nb['nb'];
       }






    /***********vehicule*******/

    /**** fonction 1 ****/

    function selectAllVehicules ()
    {
        $requete = "select * from vehicule ;";
        $con = connexion ();
        if ($con)
        {
            $lesVehicules = mysqli_query($con, $requete);
            //var_dump($LesVehicules);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesVehicules;  
        
    }

    /**** fonction 2 ****/

    function insertvehicule ($tab)
    {
        $requete = "insert into vehicule values(null,'".$tab['matricule']."','".$tab['marque']."','".$tab['datecirculation']."','".$tab['nbkm']."','".$tab['idclient']."');";
        //echo $requete;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

    /**** fonction 3 ****/
    
    function deleteVehicule ($idvehicule)
    {
        $requete = "delete from vehicule where idvehicule = ".$idvehicule ;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }
   

     /**** fonction 4 ****/

    function selectWhereVehicule ($idvehicule)
    {

        $requete = "select * from vehicule where idvehicule = ".$idvehicule ;
        $con = connexion ();
        if ($con)
        {
            $lesVehicules = mysqli_query($con, $requete);
            $unVehicule = mysqli_fetch_assoc($lesVehicules); 
            //var_dump($lesVehicules);
        }
        else 
        {
            return null;
        }
           deconnexion($con);
        
           return $unVehicule;   
    
    }
    /**** fonction 5 ****/

    function updateVehicules ($tab)
    {

        $requete = "update vehicule set matricule = '".$tab ['matricule']."', marque = '".$tab ['marque']."', datecirculation = '".$tab ['datecirculation']."', nbkm = '".$tab ['nbkm']."', idclient = '".$tab ['idclient']."' where idvehicule = ".$tab['idvehicule'] ;
        $con = connexion ();
        if ($con)
        {
           mysqli_query($con, $requete);
           
        }
        else 
        {
            return null;
        }
           deconnexion($con);
      
    
    }
    /**** fonction 6 ****/

    function searchVehicules($mot)
    {
        $requete = "select * from vehicule where matricule like '%".$mot
        ."%' or marque like '%".$mot."%' or datecirculation like '%".$mot. "%' or nbkm like '%".$mot."%' or idclient like '%".$mot."%' ; ";
        $con = connexion ();
        if ($con)
        {
            $lesVehicules = mysqli_query($con, $requete);
        }
        else 

        {
          return null; 
        }
        deconnexion($con);
        return $lesVehicules;   
    }
           /**** fonction 7 ****/

           function countVehicules()
           {
               $requete = "select count(*) as nb from vehicule ; ";
       
               $con = connexion ();
               if ($con)
               {
                   $resultat = mysqli_query($con, $requete);
                   $nb = mysqli_fetch_assoc($resultat);
                  
               }
               else
               {
                   return null;
               }
               
               deconnexion($con);
               
               return $nb['nb'];
           }
    







    
    /****intervention ****/

    /**** fonction 1 ****/

    function selectALLInterventions ()
    {
        $requete = "select * from intervention ;";
        $con = connexion ();
        if ($con)
        {
            $lesInterventions = mysqli_query($con, $requete);
            //var_dump($LesInterventions);
        }
        else 
        {
           deconnexion($con);
        }
           return $lesInterventions;   
        
    }

    /**** fonction 2 ****/

    function insertintervention ($tab)
    {
        $requete = "insert into intervention values(null,'".$tab['description']."','".$tab['dateintervention']."','".$tab['prix']."','".$tab['idvehicule']."','".$tab['idtechnicien']."');" ;
        /*echo $requete;*/
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

    /**** fonction 3 ****/
    
    function deleteIntervention ($idintervention)
    {
        $requete = "delete from interverntion where idintervention = ".$idintervention ;
        $con = connexion ();
        if ($con)
        {
            mysqli_query($con, $requete);
        }
        deconnexion($con);
    }

     /**** fonction 4 ****/

     function selectWhereIntervention ($idintervention)
     {
 
         $requete = "select * from intervention where idintervention = ".$idintervention ;
         $con = connexion ();
         if ($con)
         {
             $lesInterventions = mysqli_query($con, $requete);
             $unIntervention = mysqli_fetch_assoc($lesInterventions); 
             //var_dump($lesInterventions);
         }
         else 
         {
             return null;
         }
            deconnexion($con);
         
            return $unIntervention;   
     
     }
     /**** fonction 5 ****/
 
     function updateIntervention ($tab)
     {
 
         $requete = "update intervention set description = '".$tab ['description']."', dateinter = '".$tab ['dateinter']."', prix = '".$tab ['prix']."', idvehicule = '".$tab ['idvehicule']."', idtechnicien = '".$tab ['idtechnicien']."' where idintervention = ".$tab['idintervention'] ;
         $con = connexion ();
         if ($con)
         {
            mysqli_query($con, $requete);
            
         }
         else 
         {
             return null;
         }
            deconnexion($con);
       
     
     }
     /**** fonction 6 ****/
 
     function searchInterventions($mot)
     {
         $requete = "select * from intervention where description like '%".$mot
         ."%' or dateinter like '%".$mot."%' or prix like '%".$mot. "%' or idvehicule like '%".$mot."%' or idtechnicien like '%".$mot."%' ; ";
         $con = connexion ();
         if ($con)
         {
             $lesInterventions = mysqli_query($con, $requete);
         }
         else 
 
         {
           return null; 
         }
         deconnexion($con);
         return $lesInterventions;   
     }
            /**** fonction 7 ****/

            function countInterventions()
            {
                $requete = "select count(*) as nb from intervention ; ";
        
                $con = connexion ();
                if ($con)
                {
                    $resultat = mysqli_query($con, $requete);
                    $nb = mysqli_fetch_assoc($resultat);
                   
                }
                else
                {
                    return null;
                }
                
                deconnexion($con);
                
                return $nb['nb'];
            }
     

            /*******fonction user**** */
            function selectUser ($email, $mdp)
            {
                $requete = "select * from user where email ='".$email."'and mdp ='".$mdp."';"; 
        
                $con = connexion ();
                if ($con)
                {
                    $resultat = mysqli_query($con, $requete);
                    $unUser = mysqli_fetch_assoc($resultat);
                   
                }
                else
                {
                    return null;
                }
                
                deconnexion($con);
                
                return $unUser;
            }
     