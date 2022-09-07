<?php

class Senior
{

    private $db;
    public function __construct( )    {
    $this->db = new Database;
}



public function getTeamLeader($idSenior){
    $this->db->query("SELECT * FROM teamleaders WHERE fk_senior = $idSenior;");
    return $this->db->resultSet();
}


public function getOpWithZone(){
    $this->db->query("SELECT operateurs.*,zones.designation
    FROM operateurs
    INNER JOIN zones
    ON operateurs.fk_zone = zones.id;");
    return $this->db->resultSet();
}

public function updateTimeSenior($time,$fkSenior){
    $this->db->query("UPDATE `teamLeaders` SET 	timeTeam=:time WHERE fk_senior = :fkSenior");
    $this->db->bind(':time' ,$time);
    $this->db->bind(':fkSenior' ,$fkSenior);
    $this->db->execute();
}

public function countTeamLeader($fkSenior){
    $this->db->query("SELECT * FROM `teamleaders` WHERE fk_senior = $fkSenior");
    return $this->db->resultSet();
}
}