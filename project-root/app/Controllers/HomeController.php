<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        // public/home.html dosyasını okuyup ekrana bas
        $filePath = __DIR__ . '/../../public/home.php';

        if (file_exists($filePath)) {
            echo file_get_contents($filePath);
        } else {
            echo "Home page not found.";
        }
    }
}
