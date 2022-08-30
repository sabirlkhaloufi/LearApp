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
                
    }

?>