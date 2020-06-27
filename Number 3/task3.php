<?php

$array = explode(' ', $argv[1]);
$clear_array = [];
foreach ($array as $el) {
    if ($el == '-0') {
        $el = abs($el);
    }
    if (preg_match('/^-?[0-9]+$/', $el)) {
        $clear_array[] = $el;
    }
}
$clear_array = array_unique($clear_array);
asort($clear_array);

echo "Output: " . implode(' ', $clear_array);
