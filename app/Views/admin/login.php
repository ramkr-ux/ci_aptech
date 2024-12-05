<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter 4 Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">

                <h2>Login</h2>

                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?= site_url('/login') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="username" name="username" placeholder="Username"
                            value="<?= set_value('username') ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <p>if you don't have account , then <a href="<?= site_url('/register') ?>">register</a> here!</p>
</body>

</html>