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
            $data = [
              ["title" =>"teamLeader"],
              ["team"=>$team,
              'zones' => $zone]
            ];
            $this->view('pages/teamBySenior', $data);
      
          }
                
    }

?>