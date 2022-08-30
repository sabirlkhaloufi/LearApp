<?php

class Senior
{

    private $db;
    public function __construct( )    {
    $this->db = new Database;
}



public function getTeamLeader(){
    $this->db->query("SELECT * FROM teamleaders WHERE fk_senior = ;");
    return $this->db->resultSet();
}


public function getOpWithZone(){
    $this->db->query("SELECT operateurs.*,zones.designation
    FROM operateurs
    INNER JOIN zones
    ON operateurs.fk_zone = zones.id;");
    return $this->db->resultSet();
}

}