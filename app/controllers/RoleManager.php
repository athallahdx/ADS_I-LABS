<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

class RoleManager extends Controller {
        private $userService;
        private $praktikumService;
        private $userData=[];

        public function __construct() {
            // Instantiate the UserService
            $this->userService = new UserService();
            $this->praktikumService = new PraktikumService();
            $this->userData=$this->userService->getUserData(Session::get('user_id'));
            $this->userData['praktikum']=$this->praktikumService->getPraktikumByUserIdAndSemester($this->userData['profil_user']['id_profil'],$this->userData['profil_user']['semester']);
        }

    public function index() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }

        $this->view('RoleManager/index', $this->userData);
    }

}