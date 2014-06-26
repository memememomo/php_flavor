<?php

require_once './include/const.php';

$c = bootstrap();

$Sample = $c->_m('Sample');

$c->stash['test'] = 'テスト';
$c->stash['users'] = $Sample->users();

$c->render();
