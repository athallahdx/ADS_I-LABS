<?php

require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../services/PraktikumService.php';

class Materi extends Controller {
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
            exit;
        }
    
        // Get the user's profile ID
        $id_profil = $this->userData['profil_user']['id_profil'];
    
        // Fetch materi data based on the user's profile ID
        $materiList = $this->praktikumService->getMateriByUserProfile($id_profil);
    
        // Group materi by praktikum
        $groupedMateri = [];
        foreach ($materiList as $materi) {
            $praktikumId = $materi['id_praktikum'];
            if (!isset($groupedMateri[$praktikumId])) {
                $groupedMateri[$praktikumId] = [
                    'praktikum' => [
                        'id_praktikum' => $materi['id_praktikum'],
                        'nama_praktikum' => $materi['nama_praktikum']
                    ],
                    'materi' => []
                ];
            }
            $groupedMateri[$praktikumId]['materi'][] = [
                'id_materi' => $materi['id_materi'],
                'judul' => $materi['judul'],
                'deskripsi_materi' => $materi['deskripsi_materi'],
                'file_materi' => $materi['file_materi'],
                'tanggal_upload_materi' => $materi['tanggal_upload_materi']
            ];
        }
    
        // Pass the grouped materi list to the view
        $this->view('Materi/index', ['groupedMateri' => $groupedMateri]);
    }
    

}