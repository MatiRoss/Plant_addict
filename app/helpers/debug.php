<?php
// Fonction debug

function debug($var)
{
    highlight_string("<?php\n" . var_export($var, true) . ";\n?>");
}

// Affichage erreurs

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
ini_set('display_startup_errors', true);
ini_set('log_errors', false);
