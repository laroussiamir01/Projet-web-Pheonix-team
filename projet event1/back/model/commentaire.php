<?php
class commentaire_event{
		private  $id_commentaire;
		private  $contenu;
		private  $date_commentaire;
		function __construct($id_commentaire,$contenu,$date_commentaire){
			
			$this->id_commentaire=$id_commentaire;
			$this->contenu=$contenu;
			$this->date_commentaire=$date_commentaire;

			
		}
		
		function getIdc(){
			return $this->id_commentaire;
		}
		function getcontenu():string{
			return $this->contenu;
		}
		function getDate_commentaire(){
			return $this->date_commentaire;
		}

	function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
        function setid(int $id_commentaire){
			$this->id_commentaire;
		}
		
		function setdate(string $date_commentaire){
			$this->date_commentaire=$date_commentaire;
		}
	}
?>