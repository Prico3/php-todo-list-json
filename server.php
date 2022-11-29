<?php
$todos = ["HTML", "CSS", "Vue", "PHP", "Python"];

$todos_json = json_encode($todos);

header("Content-Type: application/json");

echo $todos_json;

// var_dump($todos_json);
