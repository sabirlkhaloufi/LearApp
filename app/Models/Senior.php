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

public function getSeniorsFromAdmin(){
    $this->db->query("SELECT * FROM `seniors`");
    return $this->db->resultSet(); 
}

public function AjouterTeam($data,$idSenior){
    $email = $data["email"];
    $nom = $data["nom"];
    $prenom = $data["prenom"];
    $Equipe = $data["Equipe"];
    $Poste = $data["Poste"];
    $Matricule = $data["Matricule"];
    $password = $data["password"];

    $this->db->query("INSERT INTO `teamleaders`(`nom`, `prenom`, `Matricule`, `Equipe`, `fk_senior`, `email`, `password`,`Poste`) VALUES ('$nom','$prenom','$Matricule','$Equipe','$idSenior','$email','$password','$Poste')");
    $this->db->execute();
}

public function getTeamById($id){
    $this->db->query("SELECT * From `teamleaders` WHERE id = $id");
    return $this->db->single(); 
}

public function UpdateTeamById($data,$id){
    $email = $data["email"];
    $nom = $data["nom"];
    $prenom = $data["prenom"];
    $Equipe = $data["Equipe"];
    $Poste = $data["Poste"];
    $Matricule = $data["Matricule"];
    $password = $data["password"];

    $this->db->query("UPDATE `teamleaders` SET `email`='$email',`nom`='$nom',`prenom`='$prenom',`Matricule`='$Matricule',`Poste`='$Poste',`Equipe`='$Equipe',`password`='$password' WHERE id = $id");
    $this->db->execute();
}

public function deleteTeam($id){
    $this->db->query("DELETE FROM `teamleaders` WHERE id = $id");
    $this->db->execute(); 
}

public function addJustification($data,$date){
    $justification = $data["justification"];
    $id = $data["id"];
    $this->db->query("UPDATE `teamleaders` SET `justification`='$justification',`date_just`='$date' WHERE id = $id");
    $this->db->execute();
}


public function getZoneTeam($idSenior){
    $this->db->query("SELECT zones.*,teamleaders.Matricule
    FROM zones
    INNER JOIN teamleaders
    ON zones.fk_teamLeader = teamleaders.id WHERE teamleaders.fk_senior = $idSenior");
    return $this->db->resultSet();  
}


public function getZoneById($id){
    $this->db->query("SELECT zones.*,teamleaders.Matricule
    FROM zones
    INNER JOIN teamleaders
    ON zones.fk_teamLeader = teamleaders.id WHERE zones.id = $id");
    return $this->db->single();  
}




    public function UpdateZoneById($data,$id){
        $zone = $data["zone"];
        $TeamLeader = $data["Matricule"];
        $this->db->query("UPDATE `zones` SET `fk_teamleader`='$TeamLeader' WHERE id = $id");
        $this->db->execute();
    }


    public function getAllSenior(){
        $this->db->query("SELECT * FROM `seniors` WHERE role = '' ");
        return $this->db->resultSet();  
    }
}