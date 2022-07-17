<?php


// Docksal DB connection settings.
$databases['migrate']['default'] = [
  'database' => 'sfcmd7',
  'username' => getenv('MYSQL_USER'),
  'password' => getenv('MYSQL_PASSWORD'),
  'host' => 'db',
  'driver' => 'mysql',
];
