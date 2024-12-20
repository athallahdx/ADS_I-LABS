<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

    class Dashboard extends Controller {
        private $userService;
        private $praktikumService;
        public $userData=[];

        public function __construct() {
            // Instantiate the UserService
            $this->userService = new UserService();
            $this->praktikumService = new PraktikumService();
            $this->userData=$this->userService->getUserData(Session::get('user_id'));
            $this->userData['praktikum']=$this->praktikumService->getPraktikumByUserIdAndSemester($this->userData['profil_user']['id_profil'],$this->userData['profil_user']['semester']);
        
            $praktikumIds = array_column($this->userData['praktikum'], 'id_praktikum'); 
            $this->userData['total_tugas'] = $this->praktikumService->getTotalTugasByPraktikumIds($praktikumIds);

            $this->userData['total_materi'] = $this->praktikumService->getTotalMateriByPraktikumIds($praktikumIds);

            $this->userData['tugas'] = $this->praktikumService->getTugasByUserProfil($this->userData['profil_user']['id_profil']);
            $this->userData['presensi'] = $this->praktikumService->getPresensiByUser($this->userData['profil_user']['id_profil']);
        }
        public function index() {
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }


            $this->view('Dashboard/index', $this->userData);
        }
    }

