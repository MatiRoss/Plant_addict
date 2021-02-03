<?php
    //---FONCTION DEBUG---//

    error_reporting(E_ALL);
    ini_set('display_errors',true);
    ini_set('html_errors',false);
    ini_set('display_startup_errors',true);
    ini_set('log_errors',false);

    //Variables SANITIZING (URL)
    $url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    $urlIsSet = isset($url);

    //---ROADS---//

    require('routes/web.php');
