<?php

    include "../config.php";
    class reclamationC{
        function afficherReclamation(){
            $sql="SELECT * FROM reclamation";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }

        function afficherReclamationParId($id){
            $sql="SELECT * FROM reclamation where reclamation_id=".$id;
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }

        function ajouterReclamation($reclamation){
            $sql="INSERT INTO reclamation (nom, prenom, nomUtilisateur, email, typer, explication ) 
			VALUES (:nom,:prenom,:nomUtilisateur,:email,:typer, :explication )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    
				   'nom' =>$reclamation->getNom() , 
                   'prenom' =>$reclamation->getPrenom(),
                   'nomUtilisateur' =>$reclamation->getNomUtilisateur(),
                   'email' =>$reclamation->getEmail(),
                   'typer' =>$reclamation->getTyper(),
                   'explication' =>$reclamation->getExplication(),     
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

        function updateReclamation($reclamation, $id){
            $sql="UPDATE reclamation SET nom=:nom, prenom=:prenom, nomUtilisateur=:nomUtilisateur, email=:email, typer=:typer, explication=:explication WHERE reclamation_id=:id";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
                    'id' =>$id,
                    'nom' =>$reclamation->getNom() , 
                    'prenom' =>$reclamation->getPrenom(),
                    'nomUtilisateur' =>$reclamation->getNomUtilisateur(),
                    'email' =>$reclamation->getEmail(),
                    'typer' =>$reclamation->getTyper(),
                    'explication' =>$reclamation->getExplication(),     
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

        function supprimerReclamation($reclamation_id){
            $sql="DELETE FROM reclamation WHERE reclamation_id=(:reclamation_id);";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    'reclamation_id' =>$reclamation_id,
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		
      
        
    }
        public function AfficherreclamationPaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM reclamation LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
    
    
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM reclamation";
            $db = config::getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


    }
?>