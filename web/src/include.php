<?php

// utilities

/**
 *  Configure this db_connect file to connect to the database you have
 *  created.
 */
require_once './src/utilities/db_connect.php';

require_once './src/utilities/tools.php';
require_once './src/utilities/jwt.php';
require_once './src/utilities/generic.php';
require_once './src/utilities/action.php';
require_once './src/utilities/controller.php';

// asset

require_once './src/standard/asset/asset_utilities.php';
require_once './src/standard/asset/asset_controller.php';
require_once './src/standard/asset/asset_model.php';

// article 

require_once './src/standard/article/article_controller.php';
require_once './src/standard/article/article_model.php';

// post

// require_once './src/standard/post/post_controller.php';
// require_once './src/standard/post/post_model.php';

// user
require_once './src/standard/user/user_utilities.php';
require_once './src/standard/user/user_controller.php';
require_once './src/standard/user/user_model.php';

// modules
// require_once './src/modules/literal/include.php';