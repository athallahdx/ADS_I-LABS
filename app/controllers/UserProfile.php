<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

class UserProfile extends Controller {
    private $userService;
    private $praktikumService;
    public $userData=[];

    public function __construct() {
        // Instantiate the UserService
        $this->userService = new UserService();
        $this->praktikumService = new PraktikumService();
        $this->userData=$this->userService->getUserData(Session::get('user_id'));
        $this->userData['praktikum']=$this->praktikumService->getPraktikumByUserId($this->userData['profil_user']['id_profil']);
        $this->userData['presensi']=$this->praktikumService->getPresensiByUser($this->userData['profil_user']['id_profil']);
    }

    public function index() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }
       $this->view('UserProfile/index', $this->userData);
    }

}