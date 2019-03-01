<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');
     /* add the check script after backend completion*/
    // require_once('include/check.inc.php');

?>

<body class="">

    <!-- Nav bar
		============================================= -->
    <?php include $inc_folder.'include/page_navbar.inc.php'; ?>


    <!-- Offence category
		============================================= -->
    <?php include $inc_folder.'include/admin_cat.inc.php'; ?>

    <!-- Footer
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>

</body>

</html>