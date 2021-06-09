<?php

$bear = file_get_contents(__DIR__ .'/bear.png');

header('Content-Type: image/png');

echo $bear ;

