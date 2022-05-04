<?php

use MintyPHP\DB;

$state = in_array($state, ['all', 'active', 'completed']) ? $state : 'all';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    if ($name) {
        DB::insert("INSERT INTO `todo` (`name`, `is_checked`) VALUES (?, 0)", $name);
    }
}
