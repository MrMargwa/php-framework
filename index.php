<?php

declare(strict_types=1);

ini_set("display error", 1);

$page = $_GET['page'];

require __DIR__ . "/{$page}.php";