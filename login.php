<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');

?>

<body class="stretched side-header side-header-right open-header">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Nav bar
		============================================= -->
        <?php include $inc_folder.'include/home_header.php'; ?>
    </div>

    <!-- Footer
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>

</body>

</html>