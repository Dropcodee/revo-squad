<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');

?>

<body class="">

    <!-- Nav bar
		============================================= -->
    <?php include $inc_folder.'include/page_navbar.inc.php'; ?>


    <!-- Offence category
		============================================= -->
    <?php include $inc_folder.'include/print_sdc.inc.php'; ?>

    <!-- Footer
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>

</body>

</html>