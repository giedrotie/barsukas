<?php

$users = [
    ['name' => 'Aldona', 'pass' => md5('123')],
    ['name' => 'Kazimieras', 'pass' => md5('123')],
    ['name' => 'Bebras', 'pass' => md5('123')],
];

file_put_contents(__DIR__.'/data/users.json', json_encode($users));