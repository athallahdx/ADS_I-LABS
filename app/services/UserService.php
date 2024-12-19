<?php

require_once __DIR__ . '/../Repositories/UserRepository.php';
require_once __DIR__ . '/../models/User.php';

use App\Models\User;

class UserService {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function authenticate($email, $password) {
        // Find user by email
        $user = $this->userRepository->findByEmail($email);
    
        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'User not found.',
            ];
        }
    
        // Verify the password
        if (password_verify($password, $user['password'])) {
            return [
                'status' => 'success',
                'message' => 'Authentication successful.',
                'user' => $user, // Pass the entire user data here
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Incorrect password.',
            ];
        }
    
        // Return success with user details and role
        
    }
    

    public function register(User $user) {
        // Check if the email or username already exists
        $existingEmail = $this->userRepository->findByEmail($user->getEmail());
        $existingUsername = $this->userRepository->findByUsername($user->getUsername());
    
        if ($existingEmail) {
            return [
                'status' => 'error',
                'message' => 'Email is already registered.',
            ];
        }
    
        if ($existingUsername) {
            return [
                'status' => 'error',
                'message' => 'Username is already taken.',
            ];
        }
    
        // Hash the password before saving
        $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));
    
        // Save the user to the database
        $data = [
            'username' => $user->getUsername(),
            'fullname' => $user->getFullname(),
            'nim' => $user->getNim(),
            'prodi' => $user->getProdi(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),  // Assuming the role is 'user' by default, change if necessary
            'status' => $user->getStatus(), // Assuming the status is 'active', change if needed
        ];
    
        $success = $this->userRepository->insert($data);
        if ($success) {
            return [
                'status' => 'success',
                'message' => 'User registered successfully.',
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Registration failed.',
            ];
        }
    }
    

    public function deactivateUser($id) {
        return $this->userRepository->deactivateUser($id);
    }

    public function getAuthenticatedUser() {
        Session::start();
        $userId = Session::get('user_id');

        if (!$userId) {
            return null; // No user is logged in
        }

        return $this->userRepository->findById($userId);
    }

    public function logout() {
        Session::start();
        Session::destroy();
    }
}
