<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
//echo dirname(__DIR__);
//echo  __DIR__.'/home';;
//echo  __DIR__.'/public/index.php';
//echo $_SERVER['REQUEST_URI'];
// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provi/des a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
