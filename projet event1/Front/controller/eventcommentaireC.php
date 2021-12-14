<?php
	include_once 'config.php';
	include_once 'model\commentaire.php';

	class eventcommentaireC {
		
		function ajoutercommentaireevent($commentaire_event){
			$sql="INSERT INTO commentaire_event (contenu,date_commentaire)
			VALUES (:contenu,:date_commentaire)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'contenu' => $commentaire_event->getcontenu(),
					'date_commentaire' => $commentaire_event->getDate_commentaire()
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercommentaireevent(){
			
			$sql="SELECT * FROM commentaire_event";
			$db = config::getConnexion();
			try{
				$listec = $db->query($sql);
				return $listec;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercommentaireevent($id_commentaire){
			$sql="DELETE FROM commentaire_event WHERE id_commentaire=:id_commentaire";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_commentaire', $id_commentaire);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function recuperer($id_commentaire){
			$sql="SELECT * from commentaire_event  where id_commentaire=$id_commentaire";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$commentaire_event=$query->fetch();
				return $commentaire_event;
			}
			catch (Exception $e){
				die('Erreur: '. $e->getMessage());
			}
		}
		
		function modifiercommentaireevent($commentaire_event, $id_commentaire){
			try {
				$db=config::getConnexion();
				$query=$db->prepare(
					"UPDATE commentaire_event SET contenu=:contenu,date_commentaire=:date_commentaire where id_commentaire=:id_commentaire;"
				);
				$query->execute([
				
					'id_commentaire'=>$id_commentaire,
					'contenu'=>$commentaire_event->getcontenu(),
					'date_commentaire'=>$commentaire_event->getDate_commentaire()
					
				]);
				echo $query->rowCount();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		

	}
?>