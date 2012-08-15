<?php /* Smarty version Smarty-3.1.11, created on 2012-08-16 00:37:44
         compiled from "/home/admin2/workspace/php-flavor/public_html/include/smarty/templates/index.tmpl" */ ?>
<?php /*%%SmartyHeaderCode:1660216520502bc248e7d0f8-60368869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b82d8a3afa85a37ff39535969aeb3459bcddd221' => 
    array (
      0 => '/home/admin2/workspace/php-flavor/public_html/include/smarty/templates/index.tmpl',
      1 => 1345043172,
      2 => 'file',
    ),
    '1b9d1b35721f0477b99954a9cffee82ccb063bfb' => 
    array (
      0 => '/home/admin2/workspace/php-flavor/public_html/include/smarty/templates/layouts/default.tmpl',
      1 => 1345042998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660216520502bc248e7d0f8-60368869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502bc248eb70d8_12847898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502bc248eb70d8_12847898')) {function content_502bc248eb70d8_12847898($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>**** APP TITLE *****</title>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <style type="text/css">
      body {
         padding-top: 60px;
         padding-bottom: 40px;
      }
    </style>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
	<a class="brand" href="/">APP TITLE</a>
	<ul class="nav">
	  <li><a href="">メニュー1</a></li>
	  <li><a href="">メニュー2</a></li>
	  <li><a href="">メニュー3</a></li>
	</ul>
      </div>
    </div>
    <div class="container">
      
test
<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


    </div>
  </body>
</html>
<?php }} ?>