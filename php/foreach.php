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
foreach($items as $item){
  $li .= "<li>{$item}</li>";
}

echo "<ul>{$li}</ul>";
