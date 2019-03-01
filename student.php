<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');
    /* add the check script after backend completion*/
    // require_once('include/check.inc.php');

?>

<body>


    <!-- user profile
		============================================= -->
    <?php include $inc_folder.'include/user_profile.inc.php'; ?>


    <!-- Footer
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>

</body>

</html>