<?php

class Technicien
{

    private $db;
    public function __construct( )    {
    $this->db = new Database;
}


public function GetLastTech(){
    $this->db->query("SELECT * FROM techniciens ORDER BY Id_tech DESC LIMIT 3");
    return $this->db->resultSet();
}

public function addFeedBack($idTech,$starts){
    $this->db->query("INSERT INTO feedback (fk_tech,Nstart) VALUES (:fk_tech,:Nstart)");
    $this->db->bind(':fk_tech',$idTech);
    $this->db->bind(':Nstart',$starts);
    $this->db->execute();
}

public function getAllFeed($id){
    $this->db->query("SELECT * FROM feedback WHERE fk_tech = :fk_tech");
    $this->db->bind(':fk_tech',$id);
    $this->db->execute();
    return $this->db->rowCount();
}


public function getAllCity(){
    $this->db->query("SELECT DISTINCT ville FROM techniciens;");
   return $this->db->resultSet();
}

public function getAllTech(){
    $this->db->query("SELECT * FROM techniciens;");
   return $this->db->resultSet();
}

public function countTech(){
    $this->db->query("SELECT * FROM techniciens;");
    $this->db->execute();
    return $this->db->rowCount();
}

public function getTechTopFeedback(){
    $this->db->query("SELECT * FROM techniciens ORDER BY feedback DESC LIMIT 3");
    return $this->db->resultSet();
}

public function Register($data,$fk_cat,$imgName){
    $this->db->query('INSERT INTO `techniciens`(`nom`, `prenom`, `email`,`metier`,`password`,`Fk_cat`,`img`) VALUES (:nom,:prenom,:email,:job,:password,:fk_cat,:img)');
    $this->db->bind(':nom' ,$data['nom']);
    $this->db->bind(':prenom' ,$data['prenom']);
    $this->db->bind(':email' ,$data['email']);
    $this->db->bind(':job' ,$data['job']);
    $this->db->bind(':password' ,$data['password']);
    $this->db->bind(':fk_cat' ,$fk_cat);
    $this->db->bind(':img' ,$imgName);
    $this->db->execute();
}

public function getTech($id_tech){
    $this->db->query("SELECT * FROM techniciens WHERE id_tech = :id_tech");
    $this->db->bind(':id_tech',$id_tech);
    return $this->db->single();
}

public function Login($email,$password){
    $this->db->query("SELECT * FROM techniciens WHERE email = '$email'");
    return $this->db->single();
}


public function update($data,$id,$imgName,$Fk_cat){
    $this->db->query("UPDATE `techniciens` SET nom=:nom, prenom = :prenom,
     email= :email, phone = :phone ,Fk_cat = :Fk_cat
     , metier = :metier , password = :password , adresse = :adresse , ville = :ville , img=:img WHERE Id_tech =$id");
    $this->db->bind(':nom' ,$data['nom']);
    $this->db->bind(':prenom' ,$data['prenom']);
    $this->db->bind(':email' ,$data['email']);
    $this->db->bind(':phone' ,$data['phone']);
    $this->db->bind(':metier' ,$data['job']);
    $this->db->bind(':password' ,$data['password']);
    $this->db->bind(':adresse' ,$data['adresse']);
    $this->db->bind(':ville' ,$data['ville']);
    $this->db->bind(':img' ,$imgName);
    $this->db->bind(':Fk_cat' ,$Fk_cat);
    $this->db->execute();  
}



public function delete($idTech){
    $this->db->query('DELETE FROM `techniciens` WHERE Id_tech = '.$idTech);
    $this->db->execute();
}


public function search($city,$id_cat){
    $this->db->query("SELECT * FROM techniciens WHERE ville = '$city' AND Fk_cat = $id_cat");
    return $this->db->resultSet();
}

public function getNumTechCat($countCat){
    $nTech = [];
    for ($i=1; $i <= $countCat+1; $i++) { 
        $this->db->query("SELECT * FROM techniciens WHERE Fk_cat = $i");
        $this->db->execute();
        $numTech[$i] = $this->db->rowCount();
        $nTech[] = $numTech[$i];

    }

    return $nTech;
}


public function getTechTopFedback(){
    $this->db->query("SELECT * FROM techniciens WHERE Fk_cat = $id_cat");
    return $this->db->resultSet();
}
// public function search($search_name){
//     $search_name = "%".$search_name."%";
//     $this->db->query("SELECT * FROM Admins WHERE username LIKE :name OR full_name LIKE :name");
//     $this->db->bind(':name' ,$search_name);
//     return $this->db->resultSet();
// }


public function insertFeedback($idTech,$starts){
    $this->db->query("UPDATE techniciens SET feedback = :Nstart WHERE Id_tech = :id");
    $this->db->bind(':id',$idTech);
    $this->db->bind(':Nstart',$starts);
    $this->db->execute();
}

// public function insertmultImages($imgNames,$id){
//     foreach ($imgNames as $img) {
//         $this->db->query('INSERT INTO `images`(`img`, `fk_tech`) VALUES (:img,:fk_tech)');
//         $this->db->bind(':img' ,$img);
//         $this->db->bind(':fk_tech' ,$id);
//         $this->db->execute();
//     }
// }

}