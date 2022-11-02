<?php

  class PagesController extends Controller{

    public function __construct(){
      $this->TeamL = $this->model('teamLeader');
      $this->SeniorModel = $this->model('Senior');
    }
    
    public function login(){

      $data = [
        ["title" =>"login"]
      ];

      $this->view('pages/login', $data);

    }

    public function index(){

      $data = [
        ["title" =>"welcome"]
      ];

      $this->view('pages/index', $data);

    }

    public function senior(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }

      $team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
      $data = [
        ["title" =>"senior"],
        ["team" => $team]
      ];

      $this->view('pages/senior', $data);

    }

    public function teamLeader(){
      if(!isset($_SESSION['id'])){
        redirect('pages/index');
      }
      $team = $this->TeamL->getOpWithZone($_SESSION['id']);
      $zone = $this->TeamL->getZone($_SESSION['id']);
      $data = [
        ["title" =>"teamLeader"],
        ["team"=>$team,
        'zones' => $zone]
      ];
      $this->view('pages/teamLeader', $data);

    }

    public function badge(){
      $data = [
        ["title" =>"badge"]
      ];

      $this->view('pages/badge', $data);
    }

    public function updateTime(){
      if(!isset($_SESSION['id'])){
        redirect('pages/index');
      }
    $zone = $this->TeamL->getZone($_SESSION['id']);
      $data = [
        ["title" =>"updateTime"],
        ["zones" => $zone]
      ];
      
      $this->view('pages/updateTime', $data);
    }


    public function updateTimeSenior(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $data = [
        ["title" =>"updateTime"],
      ];
      
      $this->view('pages/updateTimeSenior', $data);  
    }

    public function operateurs(){
      if(!isset($_SESSION['id'])){
        redirect('pages/index');
      }
      $oper = $this->TeamL->getOpWithZone($_SESSION['id']);
      $data = [
        ["title" =>"operateurs"],
        ["operateurs" => $oper]
      ];
      
      $this->view('pages/operateurs', $data);  
    }
    
    public function AjouterOp(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $zone = $this->SeniorModel->getAllZones();
      $postes = $this->TeamL->getPostes();
      
      $data = [
        ["title" =>"AjouterOp"],
        ["zones" => $zone],
        ["postes" => $postes]

      ];
      
      $this->view('pages/AjouterOp', $data); 
    }

    public function addjust(){
      if(!isset($_SESSION['id'])){
        redirect('pages/index');
      }
      $oper = $this->TeamL->getOpWithZone($_SESSION['id']);
      $just = $this->SeniorModel->getAllJust();
      $data = [
        ["title" =>"addjust"],
        ["operateurs" => $oper],
        ["just" => $just]

      ];

      $this->view('pages/addjust', $data);  
    }

    public function teamleaders(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
      $data = [
        ["title" =>"teamleaders"],
        ["TeamLeader" => $team]
      ];
      $this->view('pages/teamleaders', $data);  
    }

    public function AjouterTeam(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $data = [
        ["title" =>"AjouterTeam"]
      ];
      
      $this->view('pages/AjouterTeam', $data); 
    }

    public function addjustTeam(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
      $just = $this->SeniorModel->getAllJust();
      $data = [
        ["title" =>"addjustTeam"],
        ["TeamLeaders" => $team],
        ["just" => $just]
      ];

      $this->view('pages/addjustTeam', $data);  
    }


    public function zones(){
      if(!isset($_SESSION['idSenior'])){
        redirect('pages/index');
      }
      $zones = $this->SeniorModel->getZoneTeam($_SESSION['idSenior']);
      $data = [
        ["title" =>"zones"],
        ["zones" => $zones]
      ];

      $this->view('pages/zones', $data);  
    }


    public function admin(){
      if(!isset($_SESSION['idAdmin'])){
        redirect('pages/index');
      }
      $seniors = $this->SeniorModel->getAllSenior();
      $data = [
        ["title" =>"admin"],
        ["seniors" => $seniors]
      ];

      $this->view('pages/admin/admin', $data);  
    }


    public function AjouterSenior(){
      if(!isset($_SESSION['idAdmin'])){
        redirect('pages/index');
      }
      $data = [
        ["title" =>"AjouterSenior"]
      ];

      $this->view('pages/admin/AjouterSenior', $data);
    }

    public function justifications(){
      $just = $this->SeniorModel->getAllJust();
      $data = [
        ["title" =>"justifications"],
        ["just" => $just]
      ];

      $this->view('pages/admin/justifications', $data);
    }


    public function ajouterJust(){
      $data = [
        ["title" =>"Ajouterjustifications"]
      ];

      $this->view('pages/admin/ajouterJust', $data);
    }
    
    public function operateursSenior(){
      $oper = $this->SeniorModel->getAllOperateurs();
      $data = [
        ["title" =>"operateursSenior"],
        ["operateurs"=>$oper]
      ];
      
      $this->view('pages/operateursSenior', $data);
    }

    public function permuter(){
      $oper = $this->TeamL->getOpWithZone($_SESSION['id']);
      $data = [
        ["title" =>"permuter"],
        ["operateurs"=>$oper]
      ];
      
      $this->view('pages/permuter', $data);
    }
}