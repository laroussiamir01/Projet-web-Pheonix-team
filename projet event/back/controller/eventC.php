<?php
	include_once '../config.php';
	include_once '../model/event.php';

	class eventC {
		
		function ajouterevent($event){
			$sql="INSERT INTO event(id_event,nom_event,date_debut_event,date_fin_event)
			VALUES (:id_event,:nom_event,:date_debut_event,:date_fin_event)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'id_event' => $event->getId(),
					'nom_event' => $event->getNom(),
					'date_debut_event' => $event->getDate_deb(),
					'date_fin_event' => $event->getDate_fin()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherevent(){
			
			$sql="SELECT * FROM event";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerevent($id_event){
			$sql="DELETE FROM event WHERE id_event=:id_event";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_event', $id_event);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function recuperer($id_event){
			$sql="SELECT * from event where id_event=$id_event";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$event=$query->fetch();
				return $event;
			}
			catch (Exception $e){
				die('Erreur: '. $e->getMessage());
			}
		}
		
		function modifierevent($event, $id_event){
			try {
				$db=config::getConnexion();
				$query=$db->prepare(
					"UPDATE event SET id_event=:id_event,nom_event=:nom_event,date_debut_event=:date_debut_event,date_fin_event=:date_fin_event;"
				);
				$query->execute([
				
					'id_event'=>$event->getId(),
					'nom_event'=>$event->getNom(),
					'date_debut_event'=>$event->getDate_deb(),
					'date_fin_event'=>$event->getDate_fin()
					
				]);
				echo $query->rowCount();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		

	}
?>
