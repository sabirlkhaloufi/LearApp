<?php
    class SeniorController extends Controller{

        public function __construct()
        {
            $this->SeniorModel = $this->model('Senior');
        }


        public function getAllTeamLeader(){
            var_dump($this->SeniorModel->getAllTeamLeader());
        }

        public function updateTimeSenior(){

            $this->SeniorModel->countTeamLeader();
            // $fkSenior = $_SESSION['idSenior'];
            // $time = $_POST["time"];
            // $zone = $this->SeniorModel->updateTimeSenior($time,$fkSenior);
            // redirect('page/updateTime');
        }
                
    }

?>