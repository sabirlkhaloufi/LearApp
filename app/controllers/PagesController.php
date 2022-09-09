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
    $zone = $this->TeamL->getZone($_SESSION['id']);
      $data = [
        ["title" =>"updateTime"],
        ["zones" => $zone]
      ];
      
      $this->view('pages/updateTime', $data);
    }


    public function updateTimeSenior(){
      $data = [
        ["title" =>"updateTime"],
      ];
      
      $this->view('pages/updateTimeSenior', $data);  
    }

    public function operateurs(){
      $oper = $this->TeamL->getOpWithZone($_SESSION['id']);
      $data = [
        ["title" =>"operateurs"],
        ["operateurs" => $oper]
      ];
      
      $this->view('pages/operateurs', $data);  
    }

    public function updateOp($id){
      echo $id;
      $data = [
        ["title" =>"updateOp"]
      ];
      
      $this->view('pages/updateOp', $data); 
    }

    public function AjouterOp(){
      $zone = $this->TeamL->getZone($_SESSION['id']);
      $data = [
        ["title" =>"AjouterOp"],
        ["zones" => $zone]

      ];
      
      $this->view('pages/AjouterOp', $data); 
    }

    public function addjust(){
      $oper = $this->TeamL->getOpWithZone($_SESSION['id']);
      $data = [
        ["title" =>"addjust"],
        ["operateurs" => $oper]
      ];

      $this->view('pages/addjust', $data);  
    }

    public function profileTeam(){
      $Team = $this->TeamL->getTeamById($_SESSION['id']);
      $data = [
        ["title" =>"profileTeam"],
        ["TeamLeader" => $oper]
      ];
      $this->view('pages/profileTeam', $data);  
    }

    public function teamleaders(){
      $team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
      $data = [
        ["title" =>"teamleaders"],
        ["TeamLeader" => $team]
      ];
      $this->view('pages/teamleaders', $data);  
    }

    public function AjouterTeam(){
      $data = [
        ["title" =>"AjouterTeam"]
      ];
      
      $this->view('pages/AjouterTeam', $data); 
    }

    public function addjustTeam(){
      $team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
      $data = [
        ["title" =>"addjustTeam"],
        ["TeamLeaders" => $team]
      ];

      $this->view('pages/addjustTeam', $data);  
    }


    public function zones(){
      $zones = $this->SeniorModel->getZoneTeam($_SESSION['idSenior']);
      $data = [
        ["title" =>"zones"],
        ["zones" => $zones]
      ];

      $this->view('pages/zones', $data);  
    }


    public function admin(){
      $seniors = $this->SeniorModel->getAllSenior();
      $data = [
        ["title" =>"admin"],
        ["seniors" => $seniors]
      ];

      $this->view('pages/admin/admin', $data);  
    }


    public function AjouterSenior(){
      $data = [
        ["title" =>"AjouterSenior"]
      ];

      $this->view('pages/admin/AjouterSenior', $data);
    }
}