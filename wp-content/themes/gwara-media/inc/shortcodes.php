<?php
function include_shortcodes()
{
    $dir = get_template_directory() . "/inc/shortcodes";
    foreach (scandir($dir) as $filename)
    {
        if (preg_match('/\.php$/', $filename)) {
            include_once($dir . "/"  . $filename);
        }
    }
}

include_shortcodes();