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
    }