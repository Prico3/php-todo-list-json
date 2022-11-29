<?php
$todos = ["HTML", "CSS", "Vue", "PHP", "Python"];


if (isset($_POST["newTodo"])) {
    $newTodo = $_POST["newTodo"];
    $todos[] = $newTodo;
}

$todos_json = json_encode($todos);

header("Content-Type: application/json");

echo $todos_json;

// var_dump($todos_json);
