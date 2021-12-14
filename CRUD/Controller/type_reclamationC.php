<?php

    include_once "../config.php";
    class typeReclamationC{
        function affichertypeReclamation(){
            $sql="SELECT * FROM typereclamation";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMessage());
            }
        }

        function ajouterTypeReclamation($typeReclamation){
            $sql="INSERT INTO typereclamation (libelle_typeReclamation) 
			VALUES (:libelle_typeReclamation)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    
				   'libelle_typeReclamation' =>$typeReclamation->getLibelle_typeReclamation() , 
                  

                
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    }
?>