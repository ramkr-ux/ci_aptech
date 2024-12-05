<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Header;

class Homepage extends BaseController
{
    public function index()
    {
        $headerModel = new Header();
        $imageData = $headerModel->orderBy('id', 'DESC')->first();
        $filePath = $imageData['file_path'] ?? null;
        $data = [
            'filePath' => $filePath
        ];

        return view('frontend/home', $data);
    }
    
}
