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
    $this->db->query("SELECT designation from zones WHERE fk_teamLeader = $idteam");
    return $this->db->resultSet();
}

}