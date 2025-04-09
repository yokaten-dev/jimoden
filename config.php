<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$dir = ''; // ルート直下なら空でOK

define('BASE_URL', rtrim($protocol . $host . '/' . $dir, '/'));
