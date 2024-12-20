<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

class Tugas extends Controller {
    private $userService;
    private $praktikumService;
    public $userData = [];

    public function __construct() {
        $this->userService = new UserService();
        $this->praktikumService = new PraktikumService();
        $this->userData = $this->userService->getUserData(Session::get('user_id'));
    }

    public function index() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'Login/index');
        }

        // Fetch tasks grouped by praktikum
        $userProfilId = $this->userData['profil_user']['id_profil'];
        $tasksByPraktikum = $this->praktikumService->getTugasByPraktikum($userProfilId);

        // Pass tasks to the view
        $this->view('Tugas/index', ['tasksByPraktikum' => $tasksByPraktikum]);
    }
}
