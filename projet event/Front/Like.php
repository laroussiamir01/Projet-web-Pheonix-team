<?php
 $mysqli = new mysqli("localhost", "root", "", "event") or die(mysqli_error($mysqli));
 $id_searchL= $mysqli->query("SELECT Id_User FROM likes");
 $id_searchD= $mysqli->query("SELECT Id_User FROM dislikes");
 $id_user=5;
 $nom_event=0;  
 $i=0; 
 $v=0;
    if(isset($_POST['save'])){  
        $nom_event = $_POST['nom_event'];
        while($row=$id_searchL->fetch_assoc()){
            if($id_user!=$row['Id_User']){
                $i+=1;
            }
        }
        while($row2=$id_searchD->fetch_assoc()){
            if($id_user!=$row2['Id_User']){
                $v+=1;
            }
        }
            if($i>=$id_searchL->num_rows && $v>=$id_searchD->num_rows ){
            $mysqli->query("INSERT INTO likes (nom_event,Id_User) VALUES('$nom_event','$id_user')") or die($mysqli->error);
            header("location: index.php");
            }
            if($i<$id_searchL->num_rows){
            $mysqli->query("DELETE FROM  likes where Id_User=$id_user") or die($mysqli->error);
            header("location: index.php");
            }
            if($v<$id_searchD->num_rows){
                $mysqli->query("DELETE FROM  Dislikes where Id_User=$id_user") or die($mysqli->error);
                $mysqli->query("INSERT INTO likes (nom_event,Id_User) VALUES('$nom_event','$id_user')") or die($mysqli->error);
                header("location: index.php");
                }
    }          
        ?>