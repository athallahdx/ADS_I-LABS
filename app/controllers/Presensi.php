<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

class Presensi extends Controller {

    private $userService;
    private $praktikumService;
    public $data;

    public function __construct() {
        // Instantiate the UserService
        $this->userService = new UserService();
        $this->praktikumService = new PraktikumService();
        $this->data=$this->userService->getUserData(Session::get('user_id'));
        $this->data['presensi']=$this->praktikumService->getPresensiByUser($this->data['profil_user']['id_profil']);
    }

    public function index() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }
        $this->view('Presensi/index', $this->data);
    }

    public function handlePresensi() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $status = $_POST['status'];
            $id_profil = $this->data['profil_user']['id_profil'];
            $id_presensi = $_POST['id_presensi'];
            $this->praktikumService->updatePresensi($id_profil, $id_presensi, $status);
            header('Location: ' . BASEURL . 'Presensi/index');
        }
    }

}