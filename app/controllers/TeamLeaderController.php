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


          public function updateOp($id){
            $op = $this->TeamL->getOpById($id);
            $zone = $this->TeamL->getZone($_SESSION['id']);
            $data = [
              ["title" =>"updateOp"],
               ["op" => $op],
               ['zones' => $zone]
            ];
            
            $this->view('pages/updateOp', $data); 
          }

          public function deleteOp($id){
            $this->TeamL->deleteOp($id);
            redirect("pages/operateurs");
          }

          public function updateOperateur($id){
            $this->TeamL->updateOperateur($id,$_POST);
            redirect("pages/operateurs");
          }

          public function AjouterOp(){
            $this->TeamL->AjouterOp($_POST);
            redirect("pages/operateurs");
          }

          public function addJustification(){
            $dateTime =  date("Y-m-d H:i:s");
            $dateTime = explode(" ", $dateTime);
            $date = $dateTime[0];
            $time = $dateTime[1];

            $this->TeamL->addJustification($_POST,$date);
            redirect("pages/addJust");
          }

          public function ecraser($id){
            $postes = $this->TeamL->getPostes();
            $data = [
              ["title" =>"ecraser"],
               ["postes" => $postes],
               ["id" => $id]
            ];
            $this->view('pages/ecraser', $data);
          }

          public function ecraserPoste($id){
            $this->TeamL->ecraserPoste($id,$_POST);
            redirect("pages/operateurs");
          }

          // public function permuter($id){
          //   $postes = $this->TeamL->getPostes();
          //   $data = [
          //     ["title" =>"ecraser"],
          //      ["postes" => $postes],
          //      ["id" => $id]
          //   ];
          //   $this->view('pages/ecraser', $data);
          // }

          public function permuterOper(){
            $oper1 = explode(",",$_POST["oper1"]);
            $oper2 = explode(",", $_POST["oper2"]);

            $this->TeamL->permuterOper($oper1,$oper2);
            redirect("pages/operateurs");
          }

    }

?>