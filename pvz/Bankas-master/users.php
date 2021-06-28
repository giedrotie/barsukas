<?php

$users = [
    ['user' => 'Jonas', 'pass' => md5('BitBank123')],
    ['user' => 'Bebras', 'pass' => md5('123')]
];

file_put_contents(__DIR__.'/data/users.json', json_encode($users));