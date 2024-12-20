<?php

    require_once __DIR__ . '/../services/UserService.php';
    require_once __DIR__ . '/../services/PraktikumService.php';
    class DashboardAdmin extends Controller {

        private $userService;
        private $praktikumService;
        public $userData=[];
        
        public function __construct() {
            // Instantiate the UserService
            $this->userService = new UserService();
            $this->praktikumService = new PraktikumService();
            $this->userData=$this->userService->getUserData(Session::get('user_id'));
        }

        public function index() {
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }
                $this->view('DashboardAdmin/index', $this->userData);
        }
    }

