<?php
require __DIR__ . '/vendor/autoload.php';
echo \Omoon\KansaiDialect\KansaiDialect::translate($argv[1]) . "\n";
