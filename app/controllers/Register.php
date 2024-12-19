<?php

// Include the User model (make sure the path is correct)
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../services/UserService.php';

use App\Models\User;

class Register extends Controller {
    private $userService;

    public function __construct() {
        // Initialize the UserService
        $this->userService = new UserService();
    }

    public function index() {
        // Render the registration view
        $this->view('Register/index');
    }

    public function register() {
        // Get data from the form
        $namaLengkap = $_POST['namalengkap'] ?? null;
        $nim = $_POST['nim'] ?? null;
        $prodi = $_POST['prodi'] ?? null;
        $email = $_POST['email'] ?? null;
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
        $confirmPassword = $_POST['confirmpw'] ?? null;

        // Check if required fields are filled
        if (empty($namaLengkap) || empty($nim) || empty($prodi) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
            $this->view('Register/index', ['error' => 'All fields are required!']);
            return;
        }

        // Check if password and confirm password match
        if ($password !== $confirmPassword) {
            $this->view('Register/index', ['error' => 'Password and Confirm Password must match!']);
            return;
        }

        // Create the user instance
        $user = new User(null, $username, $namaLengkap, $nim, $prodi, $email, $password, 'user', 'active');

        // Call the user service to register the user
        $result = $this->userService->register($user);

        if ($result['status'] === 'success') {
            // Redirect to login page
            header('Location: ' . BASEURL . 'Login/index');
            exit;
        } else {
            // Show error message
            $this->view('Register/index', ['error' => $result['message']]);
        }
    }
}
?>
