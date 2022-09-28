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
    $this->db->query("SELECT operateurs.*,zones.designation,postes.Poste
    FROM operateurs
    INNER JOIN zones
    INNER JOIN postes
    ON operateurs.fk_zone = zones.id AND postes.fk_oper = operateurs.id OR postes.fk_oper = NULL;");
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

public function getAllOperateurs(){
    $this->db->query("SELECT operateurs.*,zones.designation,postes.Poste
    FROM operateurs
    INNER JOIN zones
    INNER JOIN postes
    ON operateurs.fk_zone = zones.id AND postes.fk_oper = operateurs.id OR postes.fk_oper = NULL;");
    return $this->db->resultSet(); 
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

    public function AjouterSenior($data){
        $email = $data["email"];
        $nom = $data["nom"];
        $prenom = $data["prenom"];
        $Equipe = $data["Equipe"];
        $Matricule = $data["Matricule"];
        $password = $data["password"];

        $this->db->query("INSERT INTO `seniors`(`nom`, `prenom`, `Matricule`, `Equipe`, `email`, `password`) VALUES ('$nom','$prenom','$Matricule','$Equipe','$email','$password')");
        $this->db->execute();
    }

    public function deleteSenior($id){
        $this->db->query("DELETE FROM `seniors` WHERE id = $id");
        $this->db->execute(); 
    }

    public function getSeniorById($id){
        $this->db->query("SELECT * FROM `seniors` WHERE id = $id");
        return $this->db->single();  
    }


    public function updateSeniorById($data,$id){
        $email = $data["email"];
        $nom = $data["nom"];
        $prenom = $data["prenom"];
        $Equipe = $data["Equipe"];
        $Matricule = $data["Matricule"];
        $password = $data["password"];
    
        $this->db->query("UPDATE `seniors` SET `email`='$email',`nom`='$nom',`prenom`='$prenom',`Matricule`='$Matricule',`Equipe`='$Equipe',`password`='$password' WHERE id = $id");
        $this->db->execute();
    }

    public function getAllJust(){
        $this->db->query("SELECT * FROM `justifications`");
        return $this->db->resultSet();
    }

    public function deleteJust($id){
        $this->db->query("DELETE FROM `justifications` WHERE id = $id");
        $this->db->execute();
    }

    public function AjouterJust($data){
        $justification = $data["justification"];
        $this->db->query("INSERT INTO `justifications`(`justification`) VALUES ('$justification')");
        $this->db->execute(); 
    }

    public function getJustById($id){
        $this->db->query("SELECT * FROM `justifications` WHERE id = $id");
        return $this->db->single();
    }

    public function updateJustById($id,$data){
        $just = $data["justification"];
        $this->db->query("UPDATE `justifications` SET `justification`='$just' WHERE id = $id");
        $this->db->execute();
    }

    public function getAllZones(){
        $this->db->query("SELECT * FROM `zones`");
        return $this->db->resultSet();  
    }


    public function deleteOp($id){
        $this->db->query("DELETE FROM `operateurs` WHERE id = $id");
        $this->db->execute();
    }

    public function getOpById($id){
        $this->db->query("SELECT operateurs.*,zones.designation,postes.Poste
        FROM operateurs
        INNER JOIN zones
        INNER JOIN postes
        ON operateurs.fk_zone = zones.id AND postes.fk_oper = operateurs.id OR postes.fk_oper = NULL AND operateurs.id = $id;");
        return $this->db->single(); 
    }

    public function updateOperateur($id,$data){
        
        $nom = $data["nom"];
        $prenom = $data["prenom"];
        $zone = $data["zone"];
        $Equipe = $data["Equipe"];
        $Poste = $data["idPoste"];
        $Matricule = $data["Matricule"];
    
        $this->db->query("UPDATE `operateurs` SET `nom`='$nom',`prenom`='$prenom',`Matricule`='$Matricule',`Equipe`='$Equipe',`fk_zone`='$zone' WHERE id = $id");
        $this->db->execute();

        $this->db->query("SELECT `id` FROM `operateurs` WHERE `Matricule` = '$Matricule' ");
        $data = $this->db->single();

        $this->db->query("UPDATE `postes` SET `fk_oper` = $data->id WHERE id_poste = $Poste");
        $this->db->execute();


    }




    public function AjouterOp($data){
        
        $nom = $data["nom"];
        $prenom = $data["prenom"];
        $zone = $data["zone"];
        $Equipe = $data["Equipe"];
        $Poste = $data["idPoste"];
        $Matricule = $data["Matricule"];
    
        $this->db->query("INSERT INTO `operateurs`(`nom`, `prenom`, `Matricule`,`Equipe`, `fk_zone`) VALUES ('$nom','$prenom','$Matricule','$Equipe','$zone')");
        $this->db->execute();

        $this->db->query("SELECT `id` FROM `operateurs` WHERE `Matricule` = '$Matricule' ");
        $data = $this->db->single();
        var_dump($data);

        $this->db->query("UPDATE `postes` SET `fk_oper` = $data->id WHERE id_poste = $Poste");
        $this->db->execute();
    }


}
