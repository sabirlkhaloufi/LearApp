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

            $fkSenior = $_SESSION['idSenior'];
            $time = $_POST["time"];
            $nbrTeam = $this->SeniorModel->countTeamLeader($_SESSION['idSenior']);
            foreach ($nbrTeam as $team) {
                $zone = $this->SeniorModel->updateTimeSenior($time,$fkSenior);
            }
            redirect('page/updateTimeSenior');
        }
                
    }

?>