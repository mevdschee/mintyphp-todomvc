<?php

use MintyPHP\DB;

$state = in_array($state, ['all', 'active', 'completed']) ? $state : 'all';

$data = DB::select("SELECT * FROM `todo`");

$itemsCompleted = DB::selectValue("SELECT COUNT(*) FROM `todo` WHERE `is_checked` = 1");
$itemsLeft = DB::selectValue("SELECT COUNT(*) FROM `todo` WHERE `is_checked` = 0");
