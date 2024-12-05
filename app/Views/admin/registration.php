<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/admin/registration.css'); ?>">
    <title>User Registration</title>
</head>

<body>
    <h1>Register</h1>

    <!-- Display validation errors -->
    <?php if (session()->getFlashdata('validation')): ?>
        <div class="errors">
            <?= \Config\Services::validation()->listErrors(); ?>
        </div>
    <?php endif; ?>

    <!-- Registration Form -->
    <form action="<?= site_url('/register') ?>" method="post">
        <?= csrf_field() ?> <!-- CSRF token for security -->

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= old('username') ?>" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>

        <div>
            <label for="profile_image">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" accept="image/*">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>

    <p>Already have an account? <a href="<?= site_url('/login') ?>">Login</a></p>
</body>

</html>