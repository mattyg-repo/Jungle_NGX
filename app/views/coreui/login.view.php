<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Pro Bootstrap Admin Template</title>
    <!-- Main styles for this application-->
    <link href="<?=THEME_ASSETS?>css/style.css" rel="stylesheet">
</head>

<body class="c-dark-theme c-app flex-row align-items-center ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>

                            <form method="post">

                                <?php if(!empty($errors)):?>
                                <div class="alert alert-danger">
                                    <?= implode("<br>", $errors)?>
                                </div>
                                <?php endif;?>
                                <?php if(!empty($messages)):?>
                                <div class="alert alert-alert">
                                    <?= implode("<br>", $messages)?>
                                </div>
                                <?php endif;?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="<?=THEME_ASSETS?>vendors/@coreui/icons/svg/free.svg#cil-user">
                                                </use>
                                            </svg></span></div>
                                    <input name="email" class="form-control" type="text" placeholder="Email">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="<?=THEME_ASSETS?>vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                                </use>
                                            </svg></span></div>
                                    <input name="password" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <!--
                                <div class="col-6 text-right">
                                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                </div>-->
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?=THEME_ASSETS?>vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="<?=THEME_ASSETS?>vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
</body>

</html>