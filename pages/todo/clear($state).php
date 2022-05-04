<?php

use MintyPHP\DB;

$state = in_array($state, ['all', 'active', 'completed']) ? $state : 'all';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    DB::delete("DELETE FROM `todo` WHERE `is_checked` = 1");
}
