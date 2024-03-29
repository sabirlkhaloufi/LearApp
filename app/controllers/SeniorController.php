<?php
    class SeniorController extends Controller{

        public function __construct()
        {
          $this->TeamL = $this->model('teamLeader');
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


        public function AjouterTeam(){
            $this->SeniorModel->AjouterTeam($_POST,$_SESSION['idSenior']);
            redirect("pages/teamleaders");
        }


        public function updateTeam($id){
            $Team = $this->SeniorModel->getTeamById($id);
            $data = [
              ["title" =>"updateTeam"],
               ["Teamleader" => $Team]
            ];
            
            $this->view('pages/updateTeam', $data); 
        }

          public function UpdateTeamById($id){
            $this->SeniorModel->UpdateTeamById($_POST,$id);
            redirect("pages/teamleaders");
          }

          public function deleteTeam($id){
            $this->SeniorModel->deleteTeam($id);
            redirect("pages/teamleaders");
          }

          public function addJustification(){
            $dateTime =  date("Y-m-d H:i:s");
            $dateTime = explode(" ", $dateTime);
            $date = $dateTime[0];
            $time = $dateTime[1];

            $this->SeniorModel->addJustification($_POST,$date);
            redirect("pages/addjustTeam");
          }


          public function updateZone($id){
            $Team = $this->SeniorModel->getTeamLeader($_SESSION['idSenior']);
            $zone = $this->SeniorModel->getZoneById($id);
            $data = [
              ["title" =>"updateZone"],
               ["Teamleader" => $Team],
               ["zone" => $zone]
            ];

            $this->view('pages/updateZone', $data); 
        }


        public function UpdateZoneById($id){
          $this->SeniorModel->UpdateZoneById($_POST,$id);
            redirect("pages/zones");
        }


        public function AjouterSenior(){
          $this->SeniorModel->AjouterSenior($_POST);
          redirect("pages/admin");
      }

      public function deleteSenior($id){
        $this->SeniorModel->deleteSenior($id);
        redirect("pages/admin");
      }


      public function updateSenior($id){
        $senior = $this->SeniorModel->getSeniorById($id);
        $data = [
          ["title" =>"updateSenior"],
           ["senior" => $senior]
        ];

        $this->view('pages/admin/updateSenior', $data); 
    }

    public function updateSeniorById($id){
      $this->SeniorModel->updateSeniorById($_POST,$id);
      redirect("pages/admin");
    }

    public function deleteJust($id){
      $this->SeniorModel->deleteJust($id);
      redirect("pages/justifications");
    }

    public function AjouterJust(){
      $this->SeniorModel->AjouterJust($_POST);
      redirect("pages/justifications");
    }

    public function updateJust($id){
      $just = $this->SeniorModel->getJustById($id);
      $data = [
        ["title" =>"updateJustification"],
        ["just" => $just]
      ];

      $this->view('pages/admin/updatejust', $data); 
    }

    public function updateJustById($id){
      $this->SeniorModel->updateJustById($id,$_POST);
      redirect("pages/justifications");
    }



//------------------------------les operateurs----------------------------
    public function updateOp($id){
      $op = $this->SeniorModel->getOpById($id);
      $zone = $this->SeniorModel->getAllZones();
      $postes = $this->TeamL->getPostes();
      $data = [
        ["title" =>"updateOp"],
         ["op" => $op],
         ['zones' => $zone],
         ['postes' =>$postes]
      ];
      
      $this->view('pages/updateOp', $data); 
    }

    public function deleteOp($id){
      $this->SeniorModel->deleteOp($id);
      redirect("pages/operateursSenior");
    }

    public function updateOperateur($id){
      $this->SeniorModel->updateOperateur($id,$_POST);
      redirect("pages/operateursSenior");
    }

    public function AjouterOp(){
      $this->SeniorModel->AjouterOp($_POST);
      redirect("pages/operateursSenior");
    }


    //------------------------------les operateurs----------------------------
                
    }

?>