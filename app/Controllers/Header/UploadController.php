<?php

namespace App\Controllers\Header;

use App\Models\Header;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UploadController extends BaseController
{
    public function index()
    {
        $headerModel = new Header();
        $imageData = $headerModel->orderBy('id', 'DESC')->first();
        $filePath = $imageData['file_path'] ?? null;
        return view('admin/header-setting', ['filePath' => $filePath]);
    }


    public function upload()
    {
        $file = $this->request->getFile('file');
        echo $file;

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();

            $uploadPath = FCPATH . 'uploads/';

            $file->move($uploadPath, $newName);

            $uniqueFileName = uniqid('file_', true);

            $filModel = new Header();

            $fileData = [
                'file_path' => $uploadPath . $newName,
                'file_name' => $uniqueFileName,
            ];

            $filModel->save($fileData);

            return redirect()->to('/upload-form')->with('message', 'file uploaded successfully');
        }
        return redirect()->to('/upload')->with('error', 'Failed to upload file');
    }


}

