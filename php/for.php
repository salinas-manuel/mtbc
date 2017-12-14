<?php

$items = [
    'for',
    'foreach',
    'while',
    'do-while'
];

$count = count($items);

echo "PHP Supports {$count} types of loops.";

$li = '';
for($i=0; $i<$count; $i++){
  $li .= "<li>{$items[$i]}</li>";
}

echo "<ul>{$li}</ul>";
