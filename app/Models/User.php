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


    $this->db->query("SELECT id FROM `operateurs` WHERE code = '$code'");
    $fk_op = $this->db->single();

    var_dump($fk_op);

    $this->db->query("UPDATE `postes` SET date=:date WHERE fk_oper = $fk_op->id");
    $this->db->bind(':date' ,$date);
    $this->db->execute();

    $this->db->query("UPDATE `teamleaders` SET date=:date, time = :time WHERE code = :code");
    $this->db->bind(':date' ,$date);
    $this->db->bind(':time' ,$time);
    $this->db->bind(':code' ,$code);
    $this->db->execute();


}


}