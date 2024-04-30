<?php

use core\session;

view('sessions/create.view.php', [
    'errors' => session::get('errors')
]);