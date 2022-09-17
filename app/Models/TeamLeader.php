<?php

class TeamLeader
{

    private $db;

    public function __construct( )    {
    $this->db = new Database;
    }



    public function getAllTeamLeader(){
        $this->db->query("SELECT * FROM teamleaders;");
        return $this->db->resultSet();
    }


    public function getOpWithZone($idteam){
        $this->db->query("SELECT operateurs.*,zones.designation
        FROM operateurs
        INNER JOIN zones
        ON operateurs.fk_zone = zones.id AND zones.fk_teamLeader = $idteam;");
        return $this->db->resultSet();  
    }

    public function getZone($idteam){
        $this->db->query("SELECT * from zones WHERE fk_teamLeader = $idteam");
        return $this->db->resultSet();
    }

    public function getNomTeam($id){
        $this->db->query("SELECT * from teamLeaders WHERE id = $id");
        return $this->db->single();   
    }

    public function addTimeByZone($zone,$time){
    // $zone = $_POST["zone"];
    // $time = $_POST["time"];
    $this->db->query("UPDATE `zones` SET time=:time WHERE designation = :zone");
    $this->db->bind(':time' ,$time);
    $this->db->bind(':zone' ,$zone);
    $this->db->execute();
    }


    

    public function addJustification($data,$date){
        $justification = $data["justification"];
        $id = $data["id"];
        $this->db->query("UPDATE `operateurs` SET `justification`='$justification',`date_jus`='$date' WHERE id = $id");
        $this->db->execute();
    }


    

}
