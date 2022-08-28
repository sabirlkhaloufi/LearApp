<?php
    class AdminController extends Controller{
        private $username;
        private $phone;
        private $email;
        private $password;
        
        public function __construct()
        {
            $this->AdminModel = $this->model('teamLeader');
        }
                
    }

?>