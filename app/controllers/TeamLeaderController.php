<?php
    class TeamLeaderController extends Controller{

        
        public function __construct()
        {
            $this->TeamL = $this->model('teamLeader');
        }

        public function getOpWithZone(){
            var_dump($this->TeamL->getOpWithZone()) ;
        }

        public function getZone(){
            var_dump($this->TeamL->getZone()) ;
        }


        public function teamBySenior($idTeam){
            if(!isset($_SESSION['idSenior'])){
              redirect('pages/index');
            }
            $team = $this->TeamL->getOpWithZone($idTeam);
            $zone = $this->TeamL->getZone($idTeam);
            $getNomTeam = $this->TeamL->getNomTeam($idTeam);
            $data = [
              ["title" =>"teamLeader"],
              ["team"=>$team,
              'zones' => $zone,
              'nom'=>$getNomTeam]
            ];
            $this->view('pages/teamBySenior', $data);
      
          }

          public function addTimeByZone(){
            $zone = $_POST["zone"];
            $time = $_POST["time"];
            $zone = $this->TeamL->addTimeByZone($zone,$time,$_SESSION['id']);
            redirect('page/updateTime');
          }
                
    }

?>