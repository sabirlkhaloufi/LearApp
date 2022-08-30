<?php

  class PagesController extends Controller{

    public function __construct(){
      $this->TeamL = $this->model('teamLeader');
      $this->SeniorModel = $this->model('Senior');
    }
    
    public function index(){

      $data = [
        ["title" =>"login"]
      ];

      $this->view('pages/login', $data);

    }

    public function senior(){
      if(!isset($_SESSION['id'])){
        redirect('pages/index');
      }

      $team = $this->SeniorModel->getAllTeamLeader();
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

}