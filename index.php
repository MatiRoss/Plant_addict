<?php
//---FONCTION DEBUG---//
include 'app/helpers/debug.php';

//Variables SANITIZING (URL)
$url = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$urlIsSet = isset($url);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//---ROADS---//

require('routes/web.php');

