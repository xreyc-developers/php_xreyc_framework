<?php


/**
 * LIBRARIES
 */
include_once 'includes/libraries/Bcrypt.php';


/**
 * MIDDLEWARES
 */
include_once 'includes/middlewares/Request.php';
include_once 'includes/core/Guards.class.php';
include_once 'includes/core/Routes.class.php';

/**
 * DATABASE
 */
include_once 'application/config/Database.class.php';
/**
 * MODEL
 */

include_once 'includes/core/Model.class.php';

/**
 * CONTROLLER
 */
include_once 'includes/core/Controller.class.php';

/**
 * VIEWS
 */
include_once 'application/views/index.php';


require 'vendor/autoload.php';

?>