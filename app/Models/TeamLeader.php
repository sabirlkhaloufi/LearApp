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
        $this->db->query("SELECT operateurs.*,zones.designation,postes.Poste
        FROM operateurs
        INNER JOIN zones
        INNER JOIN postes
        ON operateurs.fk_zone = zones.id AND postes.fk_oper = operateurs.id AND zones.fk_teamLeader = $idteam OR postes.fk_oper = NULL;");
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

    public function getPostes(){
        $this->db->query("SELECT * FROM `postes` WHERE fk_oper IS NULL");
        return $this->db->resultSet();   
    }

    public function ecraserPoste($id,$data){
        $idPoste = $data["id"];
        echo $idPoste;
        echo $id;
        $this->db->query("UPDATE `postes` SET `fk_oper` = NULL WHERE fk_oper = $id");
        $this->db->execute();

        $this->db->query("UPDATE `postes` SET `fk_oper` = $id WHERE id_poste = $idPoste");
        $this->db->execute();
    }


    public function permuterOper($oper1,$oper2){

        $this->db->query("UPDATE `postes` SET `fk_oper` = $oper2[0] WHERE fk_oper = $oper1[0]");
        $this->db->execute();

        $this->db->query("UPDATE `postes` SET `fk_oper` = $oper1[0] WHERE Poste = '$oper2[1]'");
        $this->db->execute();
    }
}
