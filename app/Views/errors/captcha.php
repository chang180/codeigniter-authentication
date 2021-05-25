<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api/js"></script>
</head>

<body>
    <div class="container box"></div>
    <br>
    <h2 align="center">
        <b>reCaptcha</b>
    </h2>
    <div class="pannel panel-default">
        <div class="panel-heading">Fill Form Data</div>
        <div class="panel-body">
            <form action="<?= base_url(); ?>captcha/validate" method="post">
            
            </form>

        </div>
    </div>
</body>

</html>