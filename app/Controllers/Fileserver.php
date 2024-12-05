<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Files\File;

class Fileserver extends BaseController
{
    public function serveFile($fileName)
    {
        $filePath = WRITEPATH . 'uploads/' . $fileName;

        if (file_exists($filePath)) {
            $file = new File($filePath);
            return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setBody(file_get_contents($filePath));
        }

        throw new \CodeIgniter\Exceptions\PageNotFoundException("File not found: " . $fileName);
    }
}
