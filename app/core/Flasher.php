<?php

namespace App\Core;

class Flasher {
    public static function setMessage($message, $type) {
        $_SESSION['flash_message'] = [
            'message' => $message,
            'type' => $type // 'error' or 'success'
        ];
    }

    public static function getMessage() {
        if (isset($_SESSION['flash_message'])) {
            $message = $_SESSION['flash_message'];
            unset($_SESSION['flash_message']); // Remove the message after it’s shown
            return $message;
        }
        return null;
    }
}
