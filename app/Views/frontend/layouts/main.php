<!DOCTYPE html>
<!-- saved from url=(0020)https://hoptacxa.vn/ -->
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="Nangniu.vn">
    <meta property="og:type" content="article">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?= base_url("assets/images/favicon.png?v=1") ?>">

    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="<?= base_url() ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/favicon.png?v=1") ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="daotran">
    <meta name="copyright" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= base_url("assets/lib/slick/slick.css") ?>" />

    <link rel="stylesheet" href="<?= base_url("assets/lib/fancybox/jquery.fancybox.css") ?>" />

    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/mobile.css") ?>" />

    <link rel="stylesheet" href="<?= base_url("assets/css/custom.css") ?>" />





    <script src="<?= base_url("assets/lib/jquery/jquery.min.js") ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/lib/fancybox/jquery.fancybox.js") ?>"></script>

    <script src="<?= base_url("assets/lib/slick/slick.js") ?>"></script>
    <script src="<?= base_url("assets/lib/cookie/jquery.cookies.2.2.0.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <!-- CSS -->
    <?= $this->renderSection('style') ?>
    <script>
        var path = '<?= base_url() ?>/';
        $(document).ready(function() {
            $(".fancybox").fancybox()
        })
    </script>

    <title><?= $title ?></title>
</head>

<body>
    <div class="site-wrapper">

        <?= $this->include('frontend/layouts/_header') ?>

        <?= $this->renderSection("content"); ?>

        <!-- Site Header -->
        <?= $this->include('frontend/layouts/_footer') ?>


        <?= $this->renderSection('script') ?>
    </div>
</body>

</html>