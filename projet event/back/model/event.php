<?php
class event{
		private  $id_event;
		private  $nom_event;
		private  $date_debut_event;
		private  $date_fin_event;
		function __construct(int $id_event, string $nom_event, string $date_debut_event, string $date_fin_event){
			
			$this->id_event=$id_event;
			$this->nom_event=$nom_event;
			$this->date_debut_event=$date_debut_event;
			$this->date_fin_event=$date_fin_event;
			
		}
		
		function getId():int{
			return $this->id_event;
		}
		function getNom():string{
			return $this->nom_event;
		}
		function getDate_deb():string{
			return $this->date_debut_event;
		}
		function getDate_fin():string{
			return $this->date_fin_event;
		}

	function setnom(string $nom_event):void{
			$this->nom_event=$nom_event;
		}
        function setid(int $id_event):void{
			$this->prenom;
		}
		
		function setdate_deb(string $date_debut_event):void{
			$this->date_debut_event=$date_debut_event;
		}
		function setdate_fin(string $date_fin_event):void{
			$this->date_fin_event=$date_fin_event;
		}
	
	}
?>