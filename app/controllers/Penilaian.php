<?php

    require_once __DIR__ . '/../services/UserService.php';
    require_once __DIR__ . '/../services/PraktikumService.php';
    class Penilaian extends Controller {

        private $userService;
        private $praktikumService;
        public $userData=[];
        
        public function __construct() {
            // Instantiate the UserService
            $this->userService = new UserService();
            $this->praktikumService = new PraktikumService();
            $this->userData=$this->userService->getUserData(Session::get('user_id'));
            $this->userData['admin']=$this->praktikumService->getAdminDetail($this->userData['profil_user']['id_profil']);
            $this->userData['tugas'] = $this->praktikumService->getTugasByPraktikumId($this->userData['admin'][0]['id_praktikum']);
        }

        public function index() {
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }
                $this->view('Penilaian/index', $this->userData);
        }


            
    }

