<?php
    class UserController extends Controller{
        private $username;
        private $phone;
        private $email;
        private $password;
        
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
                    $_SESSION['id'] = $data->id; 
                    $_SESSION['role'] = $data->role;

                    if($_SESSION['role'] == "senior"){
                        redirect('pages/senior');
                    }

                    else{
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

        public function addAdmin(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $dataAdmin =  $_POST;
                $this->AdminModel->addAdmin($dataAdmin);
                redirect('pages/admins');
            }
            else{
                $this->view('pages/admins');
            }

        }

        public function updateAdmin($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $dataAdmin =  $_POST;
                $this->AdminModel->updateAdmin($dataAdmin,$id);
                redirect("pages/admins");
            }
            else{
                redirect("pages/admins");
            } 
        }

        public function deleteAdmin($id){
            $this->AdminModel->delete($id);
            redirect('pages/admins');
        }

        public function Logout(){
            session_unset();
            echo $_SESSION['username'];
            redirect('pages/loginAdmin');
        }

        
    }

?>