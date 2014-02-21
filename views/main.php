<!DOCTYPE html>
<html>
    <head>
        <title>TTMC</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->
        <link rel="stylesheet" type="text/css" href="../styles/uikit.css" />
        <link rel="stylesheet" type="text/css" href="../styles/ttmc.css" />

    </head>
    <body>
        <?php include_once( ROOT_PATH . '/views/' . VISTA . '.php'); ?>
        <script type="text/javascript" src="../js/general.js"></script>
        <script type="text/javascript" src="../js/<?php echo VISTA . '.js' ?>"></script>
        <script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../js/uikit.js"></script>
        <script type="text/javascript" src="../js/uikit.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                general.init();
                particular.init();
            });
        </script>
    </body>
</html>