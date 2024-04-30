<?php

use core\session;

session::destroy();

header("location: /webapps/php2/about");
exit();