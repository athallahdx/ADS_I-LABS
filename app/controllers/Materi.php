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

    public function download($filename) {
    // Construct the file path
    $filePath = __DIR__ . "/../../public/uploads/materi/" . basename($filename);

    // Debugging: Check the file path
    echo "File Path: " . $filePath;  // This will help identify the file path issue

    // Check if the file exists
    if (!file_exists($filePath)) {
        http_response_code(404);
        echo "File not found.";
        return;
    }

    // Set headers to prompt file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filePath));

    // Read the file and output it to the browser
    readfile($filePath);
    exit;
}

    
    
    

}