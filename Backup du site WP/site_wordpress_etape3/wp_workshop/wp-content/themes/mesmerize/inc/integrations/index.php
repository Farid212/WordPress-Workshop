<?php

if ( ! defined('ABSPATH')) {
    die('No Way Jose');
}


function mesmerize_get_integration_modules()
{
    return array(
       
    );
}

function mesmerize_load_integration_modules()
{
    $modules = mesmerize_get_integration_modules();

    foreach ($modules as $module) {
        mesmerize_require("/inc/integrations/{$module}/index.php");
    }
}

mesmerize_load_integration_modules();