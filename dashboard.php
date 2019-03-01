<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');

?>

<body class="">



    <!-- Nav bar
		============================================= -->
    <?php include $inc_folder.'include/page_navbar.inc.php'; ?>

    <!-- Table for all members
		============================================= -->
    <?php include $inc_folder.'include/dashboard_all.inc.php'; ?>

    <!-- Add new members
		============================================= -->
    <?php include $inc_folder.'include/dashboard_addnew.inc.php'; ?>

    <!-- Footer
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>

</body>

</html>