<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;

class Registration extends BaseController
{
    public function index()
    {
        return view('admin/registration');
    }
    public function processRegister()
    {
        // Validate form input using the model's validation rules
        if (
            !$this->validate([
                'username' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|valid_email|is_unique[users.email]',  // Check for unique email
                'password' => 'required|min_length[6]|max_length[255]',
                'confirm_password' => 'matches[password]',
                // 'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]|ext_in[image,png,jpg,jpeg]',
            ])
        ) {
            $validation = \Config\Services::validation();
            return redirect()->to('/register')
                ->withInput()
                ->with('validation', $validation->getErrors());

        }

        // Handle file upload
        // $image = $this->request->getFile('image');
        // $imageName = null;

        // if ($image->isValid() && !$image->hasMoved()) {
        //     $imageName = $image->getRandomName(); // Generate a random file name
        //     $image->move(WRITEPATH . 'uploads/profile_images', $imageName); // Move to uploads directory
        // }

        // Collect form data
        $data = [
            'username' => $this->request->getPost('username', FILTER_SANITIZE_STRING),
            'email' => $this->request->getPost('email', FILTER_SANITIZE_EMAIL),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),  // Hash password
            'role' => 'Adminstrator',
            // 'image' => $imageName,
        ];

        // Create a new User model instance
        $userModel = new User();

        // Insert the user into the database
        if ($userModel->save($data)) {
            // Redirect to login with success message
            return redirect()->to('/login')->with('message', 'Registration successful! Please login.');
        } else {
            // Handle errors (if save fails)
            return redirect()->to('/register')->withInput()->with('error', 'There was an issue with the registration.');
        }
    }
}
