<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 offset-md-4">
                <h4>Sign Up</h4>
                <hr>
                <form action="<?= base_url('auth/check'); ?>" method="post" class="form-control" autocomplete="off">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                <?php endif ?>
                    <label for="" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="text-danger"><?= isset($validation) ? display_errors($validation, 'email') : '' ?></div>
                    <label for="" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="<?= set_value('password'); ?>">
                    </div>
                    <div class="text-danger"><?= isset($validation) ? display_errors($validation, 'password') : '' ?></div>
                    <div class="d-grid mb-3">
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                    </div>
                    <br>
                    <a href="<?= site_url('auth/register'); ?>" class="text-decoration-none">Have no account, creat new account</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>