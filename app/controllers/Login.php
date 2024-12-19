<?php

require_once __DIR__ . '/../services/UserService.php';

class Login extends Controller {
    private $userService;

    public function __construct() {
        // Instantiate the UserService
        $this->userService = new UserService();
    }

    public function index() {
        // Display the login form view
        $this->view('Login/index');
    }

    public function authenticate() {
        // Get email and password from POST request
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        // Validate input
        if (empty($email) || empty($password)) {
            $this->view('login/index', ['error' => 'Email and password are required!']);
            return;
        }

        // Call the UserService to authenticate the user
        $result = $this->userService->authenticate($email, $password);

        if ($result['status'] === 'success') {
            // Start a session and set user data
            Session::start();
            Session::set('user_id', $result['user']['id_user']);
            Session::set('role', $result['user']['role']);
            Session::set('username', $result['user']['username']);
            Session::set('fullname', $result['user']['fullname']);

            header('Location: ' . BASEURL . 'Dashboard/index');

            exit;
        } else {
            // Show error message if authentication fails
            $this->view('Login/index', ['error' => $result['message']]);
        }
    }

    public function logout() {
        // Destroy the session
        Session::destroy();

        header('Location: ' . BASEURL . 'LandingPage/index');
        exit;
    }
}
