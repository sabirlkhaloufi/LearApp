<?php

class User
{

    private $db;
    public function __construct( )    {
    $this->db = new Database;
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


public function badge($code,$date,$time){
    $this->db->query("UPDATE `operateurs` SET date=:date, time = :time WHERE code = :code");
    $this->db->bind(':date' ,$date);
    $this->db->bind(':time' ,$time);
    $this->db->bind(':code' ,$code);
    $this->db->execute();
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





}