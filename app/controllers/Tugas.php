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

    public function handleFileUpload() {
        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
    
            // Check if the file was uploaded successfully
            if ($file['error'] === UPLOAD_ERR_OK) {
                // Define the upload directory
                $uploadDir = __DIR__ . '/../../public/uploads/tugas_kumpul/';// Ensure UPLOADS constant is defined


                // Get file extension and generate unique file name
                $fileName = uniqid() . '_' . basename($file['name']);
                $targetFilePath = $uploadDir . $fileName;
    
                // Move the file to the uploads directory
                if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                    // Save the file information to the database (optional)
                    $taskId = $_POST['id_tugas'];  // Retrieve task_id from the form
                    $userProfilId = $this->userData['profil_user']['id_profil'];  // Ensure userData is set
                    $this->praktikumService->saveFileForTugas($userProfilId, $taskId, $fileName);
    
                    // You could also give a success message or a redirect
                    echo "File uploaded successfully!";
                } else {
                    echo "Failed to upload file.";
                }
            } else {
                echo "Error during file upload: " . $file['error'];
            }
        }
    
        // Redirect to the task index after handling the upload
        header('Location: ' . BASEURL . 'Tugas/index');
        exit;
    }

    public function downloadTugas($filename) {
        // Construct the file path (make sure to handle file path correctly)
        $filePath = __DIR__ . "/../../public/uploads/tugas/" . basename($filename);
       

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
    
        // Output the file to the browser
        readfile($filePath);
        header('Location: ' . BASEURL . 'Tugas/index');
        exit;
    }
    
    
    public function downloadTugasKumpul($id_pengumpulan) {
        // Construct the file path (make sure to handle file path correctly)
        $pengumpulan = $this->praktikumService->getFileForTugas($id_pengumpulan);
        $filename = $pengumpulan['file_pengumpulan'];
        echo var_dump($pengumpulan);
        $filePath = UPLOADS . "tugas_kumpul/" . basename($filename);

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
    
        // Output the file to the browser
        readfile($filePath);
        header('Location: ' . BASEURL . 'Tugas/index');
        exit;
    }
    
}
