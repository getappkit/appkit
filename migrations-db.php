<?php

use Doctrine\DBAL\DriverManager;

return DriverManager::getConnection([
    'path' => 'app.db',
    'driver' => 'pdo_sqlite'
]);