<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <?php if ($_SERVER['REQUEST_URI']=="/") { ?>
    <!-- Stylesheets
	============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/style.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/swiper.css" type="text/css" />

    <!-- Photography Specific Stylesheet -->
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/photography.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/photography-addons.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/et-line.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/fonts.css" type="text/css" />

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/colors.php?color=c85e51" type="text/css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/custom.css" type="text/css" />
    <style>
    #slider-subscribe-form .input-group {
        background-color: #FFF;
        border: 1px solid #EEE;
        border-radius: 3px;
        box-shadow: 0 0 30px 4px rgba(0, 0, 0, 0.15);
        border-left: 3px solid red;
    }

    #slider-subscribe-form input {
        box-shadow: none;
        border: 0;
        height: 64px;
        padding-left: 1.25rem;
    }

    #slider-subscribe-form .input-group {
        align-items: center;
    }

    #slider-subscribe-form .form-control.error {
        background-color: #ffe6e6;
    }

    .social-icon {
        margin-left: 8px;
    }

    #slider-subscribe-form {
        width: 125%;
    }

    .device-sm #slider-subscribe-form,
    .device-xs #slider-subscribe-form {
        width: 100%;
    }
    </style>
    <?php }?>


    <!-- CSS styles for other pages
	============================================= -->

    <? if ($_SERVER['REQUEST_URI']=="/admin.php" || $_SERVER['REQUEST_URI']=="/search.php" || $_SERVER['REQUEST_URI']=="/dashboard.php"): ?>

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/style2.css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/uikit.min.css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/tabulator.min.css" />

    <!-- Added main scripts for easy page redirect
	============================================= -->
    <script src="<?=$AssetsJsUrl?>/jquery.min.js"></script>
    <script src="<?=$AssetsJsUrl?>/axios.min.js"></script>
    <script src="<?=$AssetsJsUrl?>/uikit.min.js">
    </script>
    <script src="<?=$AssetsJsUrl?>/uikit-icons.min.js"></script>

    <? elseif ($_SERVER['REQUEST_URI']=="/student.php" ||$_SERVER['REQUEST_URI']=="/print.php" ): ?>

    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/style2.css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/uikit.min.css" />
    <link rel="stylesheet" href="<?=$AssetsCssUrl?>/user.css" />

    <!-- Added main scripts for easy page redirect
	============================================= -->
    <script src="<?=$AssetsJsUrl?>/jquery.min.js"></script>
    <script src="<?=$AssetsJsUrl?>/axios.min.js"></script>
    <script src="<?=$AssetsJsUrl?>/uikit.min.js">
    </script>
    <script src="<?=$AssetsJsUrl?>/uikit-icons.min.js"></script>
    <? else: ?>

    <? endif; ?>


    <!-- Document Title
	============================================= -->
    <title><?=$SiteTitle?></title>

</head>