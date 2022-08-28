<?php

  class PagesController extends Controller{

    public function __construct(){
    }
    
    public function index(){

      $data = [
        ["title" =>"login"]
      ];

      $this->view('pages/login', $data);

    }

    public function senior(){

      $data = [
        ["title" =>"senior"]
      ];

      $this->view('pages/senior', $data);

    }

    public function teamLeader(){

      $data = [
        ["title" =>"teamLeader"]
      ];

      $this->view('pages/teamLeader', $data);

    }
}