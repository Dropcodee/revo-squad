<?php

/*  application  title*/
$SiteTitle = "Revolutionary Squad | Compliant Squad";
/*  application  short title*/
$SiteShortName = " Revolutionary Squad";

/*  application  website url or domain url or localhost url*/
$SiteUrl = "http://revosquad.test:8080";

/*  application  root DIR */
$rootUrl = $SiteUrl."/";
/*  application  Assets  DIRECTORY */
$AssetsUrl = $SiteUrl."/assets";

/*  application  Css Directory*/
$AssetsCssUrl = $SiteUrl."/assets/css";

/*  application  Js Directory*/
$AssetsJsUrl = $SiteUrl."/assets/js";

/* applications routes */
$ext = ".php";
$searchUrl = $rootUrl."search".$ext;
$adminUrl = $rootUrl."admin".$ext;
$dashboardUrl = $rootUrl."dashboard".$ext;
$userUrl = $rootUrl."student".$ext;
$printUrl = $rootUrl."print".$ext;
?>