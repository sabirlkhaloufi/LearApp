<?php
    class UserController extends Controller{
        
        public function __construct()
        {
            $this->UserModel = $this->model('User');
        }


        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $this->view('pages/login');
             }
             else if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                $password = $_POST['password'];

                $data = $this->UserModel->Login($email,$password);

                if($data == false){
                    $data = [
                        ["title" =>"login"],
                        ["error"=>"email not correct"]
                      ];
                    $this->view('pages/login',$data);
                }
                else{
                    if($data->password == $password){
                        $_SESSION['email'] = $data->email;
                        $_SESSION['role'] = $data->role;
                        $_SESSION['nom'] = $data->nom;
                        $_SESSION['prenom'] = $data->prenom;
                        $_SESSION['fk-zone'] = $data->fk_zone;

                    if($_SESSION['role'] == "senior"){
                        $_SESSION['idSenior'] = $data->id;
                        redirect('pages/senior');
                    }

                    else{
                        $_SESSION['id'] = $data->id; 
                        redirect('pages/teamLeader');  
                    }
                    }
                    else{
                        $data = [
                            ["title" =>"login"],
                            ["error"=>"password not correct"]
                          ];
                        $this->view('pages/login',$data);  
                    }
                }
            }
        }

        public function Logout(){
            session_unset();
            redirect('pages/index');
        }

        public function badge(){
            $code = $_POST['code'];
            $dateTime =  date("Y-m-d H:i:s");
            $dateTime = explode(" ", $dateTime);
            $date = $dateTime[0];
            $time = $dateTime[1];
            $this->UserModel->badge($code,$date,$time);
        }

    }

?>