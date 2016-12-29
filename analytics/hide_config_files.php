<?php

// Hides specified config files from the world

// Put a list of the config file(s) to be hidden from world readable below
// In spite of what the authors say, there is no need for .php files to be executable
// hence 0600 not 0700.

$hidden_config_files = array(
                             "hide_config_files.php",
                             "owa-config-dist.php",
                             "owa-config.php"
                            );

foreach ($hidden_config_files as $x) {
    if (@is_file($x)) {
        chmod($x, 0600);
    }
}
?>
