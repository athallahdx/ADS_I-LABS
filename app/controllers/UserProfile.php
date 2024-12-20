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

    public function handleUpdate() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id_profil = $this->userData['profil_user']['id_profil'];
            $id_user = $this->userData['user']['id_user'];
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $nohp= $_POST['nohp'];

            if (isset($_FILES['fotoprofil']) && $_FILES['fotoprofil']['error'] === UPLOAD_ERR_OK) {
                $file = $_FILES['fotoprofil'];

                try{
                    $this->userService->updateUserWithImage($id_user, $id_profil, $fullname, $username, $nohp, $file);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }


            } else {
                try {
                    $this->userService->updateUser($id_user, $id_profil, $fullname, $username, $nohp);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }



            $this->userService->updateUser($id_user, $id_profil, $fullname, $username, $nohp);
            header('Location: ' . BASEURL . 'UserProfile/index');
        }
    }

}