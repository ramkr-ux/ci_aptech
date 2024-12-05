<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['username', 'email', 'password', 'role'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]|max_length[255]',
        'role' => 'required',
        // 'image' => 'mime_in[image,jpg,jpeg,png,gif]|max_size[image,1024]',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    // protected function handleImageUpload(array $data)
    // {
    //     // Check if there is an uploaded image
    //     if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    //         // Get file extension and generate new file name
    //         $file = $_FILES['image'];
    //         $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
    //         $newFileName = uniqid() . '.' . $fileExtension;

    //         // Set upload directory
    //         $uploadDir = WRITEPATH . '/uploads/images/';

    //         // Ensure the upload directory exists
    //         if (!is_dir($uploadDir)) {
    //             mkdir($uploadDir, 0777, true);
    //         }

    //         // Move the uploaded file to the directory
    //         if (move_uploaded_file($file['tmp_name'], $uploadDir . $newFileName)) {
    //             // Set the image field value to the file name
    //             $data['data']['image'] = $newFileName;
    //         }
    //     }

    //     return $data;
    // }
}
