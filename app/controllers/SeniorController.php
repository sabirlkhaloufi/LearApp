<?php
    class SeniorController extends Controller{

        public function __construct()
        {
            $this->SeniorModel = $this->model('Senior');
        }


        public function getAllTeamLeader(){
            var_dump($this->SeniorModel->getAllTeamLeader());
        }
                
    }

?>