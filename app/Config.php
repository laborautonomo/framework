<?php
/**
 * Constants
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

use Config\Config;

/**
 * PREFER to be used in Database calls or storing Session data, default is 'nova_'
 */
define('PREFIX', 'nova_');

/**
 * Setup the Config API Mode.
 * For using the 'database' mode, you need to have a database, with a table generated by 'scripts/nova_options'
 */
define('CONFIG_STORE', 'files'); // Supported: "files", "database"


/**
 * Routing configuration
 */
Config::set('routing', array(
    /*
     * The style of parameters processed on Route pattern.
     */
    'parameters' => 'named',       // Supported: 'named' and 'unnamed'.

    /*
     * The Asset Files Serving configuration.
     */
    'assets' => array(
        // The driver type used for serving the Asset Files.
        'driver' => 'default',     // Supported: 'default' and 'custom'.

        // The name of the custom Assets Dispatcher.
        'dispatcher' => 'Shared\Routing\Assets\CustomDispatcher',
    ),
));
