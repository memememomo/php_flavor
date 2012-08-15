<?php

$dirname = dirname(__FILE__);

// Database関連
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");
define("DB_NAME", "");

define("TMPL_DIR", $dirname . '/templates');

// Smartyのディレクトリ
define("SMARTY_DIR", $dirname.'/smarty/');

// ライブラリへのパスをセット
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . $dirname);

// システム共通関連
session_cache_limiter('none');
error_reporting(E_ALL ^ E_NOTICE);
ini_set( "display_errors", "Off");

require_once($dirname.'/Context.php');
require_once($dirname.'/DB.php');
require_once($dirname.'/Session.php');
require_once($dirname.'/Request.php');
require_once($dirname.'/Renderer.php');


function bootstrap() {
    $c = new Context;

    $c->req = new Request();

    $renderer = new Renderer();
    $renderer->smarty_dir = SMARTY_DIR;
    $c->renderer = $renderer;

    $db = new DB();
    $db->connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $c->db = $db;

    $c->session = new Session();

    $c->stash = array();

    return $c;
}
