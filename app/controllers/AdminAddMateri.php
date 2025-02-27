<?php

    require_once __DIR__ . '/../services/UserService.php';
    require_once __DIR__ . '/../services/PraktikumService.php';
    class AdminAddMateri extends Controller {

        private $userService;
        private $praktikumService;
        public $userData=[];
        
        public function __construct() {
            // Instantiate the UserService
            $this->userService = new UserService();
            $this->praktikumService = new PraktikumService();
            $this->userData=$this->userService->getUserData(Session::get('user_id'));
            $this->userData['admin']=$this->praktikumService->getAdminDetail($this->userData['profil_user']['id_profil']);
            $this->userData['materi'] = $this->praktikumService->getMateriByPraktikumId($this->userData['admin'][0]['id_praktikum']);
            $this->userData['tugas'] = $this->praktikumService->getTugasByPraktikumId($this->userData['admin'][0]['id_praktikum']);
        }

        public function index() {
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }
                $this->view('AdminAddMateri/index', $this->userData);
        }

        public function addMateri(){
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    'id_praktikum' => $this->userData['admin'][0]['id_praktikum'],
                    'judul' => $_POST['judul'],
                    'deskripsi_materi' => $_POST['deskripsi'],
                    'file' => $_FILES['materi'],
                ];
                $this->praktikumService->insertMateri($data);
            }

            header('Location: ' . BASEURL . 'AdminAddMateri/index');
        }

        public function addTugas(){
            if(!Session::exists('user_id')){
                header('Location: ' . BASEURL . 'Login/index');
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    'id_praktikum' => $this->userData['admin'][0]['id_praktikum'],
                    'judul' => $_POST['judul'],
                    'deskripsi_tugas' => $_POST['deskripsi'],
                    'file' => $_FILES['tugas'],
                    'deadline' => $_POST['deadline'],
                ];
                $this->praktikumService->insertTugas($data);
            }

            header('Location: ' . BASEURL . 'AdminAddMateri/index');
        }
    }

