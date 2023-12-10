<?php
require_once './DBgame.php';

use App\Model\DBgame;

$dbgame = new DBgame();
echo $dbgame->getIdGame();