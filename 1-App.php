<?php

require_once __DIR__ . "/Model/2-TodoList.php";
require_once __DIR__ . "/BusinessLogic/3-ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/4-AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/5-RemoveTodoList.php";
require_once __DIR__ . "/View/6-ViewShowTodoList.php";
require_once __DIR__ . "/View/7-ViewAddTodoList.php";
require_once __DIR__ . "/View/8-ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/12-Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();