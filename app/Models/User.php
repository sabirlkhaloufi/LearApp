<?php

class User
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


public function Login($email,$password){
    $this->db->query("SELECT * FROM seniors WHERE email = '$email'");
    $senior = $this->db->single();

    if($senior){
        $senior->role = 'senior';
        return $senior;
    }

    $this->db->query("SELECT * FROM teamleaders WHERE email = '$email'");
    $teamleader = $this->db->single();

    if($teamleader){
        $teamleader->role = 'teamLeader';
        return $teamleader;
    }

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

}