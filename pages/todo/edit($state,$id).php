<?php

use MintyPHP\DB;

$state = in_array($state, ['all', 'active', 'completed']) ? $state : 'all';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['remove']) {
        DB::delete("DELETE FROM `todo` WHERE `id` = ?", $id);
    } else {
        $name = trim($_POST['name']);
        $checked = $_POST['check'] ? 1 : 0;
        if (!$name) {
            DB::delete("DELETE FROM `todo` WHERE `id` = ?", $id);
        } else {
            DB::update("UPDATE `todo` SET `name` = ?, `is_checked` = ? WHERE `id` = ?", $name, $checked, $id);
        }
    }
}
