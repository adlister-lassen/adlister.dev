<?php

//database connection
$_ENV = include __DIR__ . '/.env.php';

require_once __DIR__ . '/database/db_connect.php';

// require models
require_once __DIR__ . '/models/Model.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Ad.php';


// require helper classes
// require_once __DIR__ . '/utils/Auth.php';
require_once __DIR__ . '/utils/Input.php';


// require front controller
require_once __DIR__ . '/controllers/PageController.php';


