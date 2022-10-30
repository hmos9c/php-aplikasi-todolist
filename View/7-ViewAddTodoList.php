<?php

require_once __DIR__ . "/../Model/2-TodoList.php";
require_once __DIR__ . "/../Helper/12-Input.php";
require_once __DIR__ . "/../BusinessLogic/4-AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
