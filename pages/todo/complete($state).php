<?php

use MintyPHP\DB;

$state = in_array($state, ['all', 'active', 'completed']) ? $state : 'all';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $checked = $_POST['toggle-all'] ? 1 : 0;
    DB::update("UPDATE `todo` SET `is_checked` = ?", $checked);
}
