<?php

require_once __DIR__ . '/../services/PraktikumService.php';
require_once __DIR__ . '/../services/UserService.php';

class PraktikumPage extends Controller {
    private $praktikumService;
    private $userService;
    private $data = [];
    
    public function __construct() {
        $this->praktikumService = new PraktikumService();
        $this->userService = new UserService();
        $this->data = $this->userService->getUserData(Session::get('user_id'));
    }

    public function index($id_praktikum) {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'Login/index');
            exit;
        }

        if ($id_praktikum === null) {
            // Redirect to praktikum list if no ID is provided
            header('Location: ' . BASEURL . 'PraktikumList/index');
            exit;
        }

        // Get user ID from session
        $id_profil = $this->data['profil_user']['id_profil'];
        
        // Load praktikum details using user ID and praktikum ID
        $this->data['praktikumDetails'] = $this->praktikumService->getPraktikumDetail($id_profil, $id_praktikum);
        $this->data['materitugas'] = $this->praktikumService->getMateriAndTugas($id_profil, $id_praktikum);


        // Pass data to the view
        $this->view('PraktikumPage/index', $this->data);
    }
}
