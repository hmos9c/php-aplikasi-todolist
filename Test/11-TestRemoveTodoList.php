<?php

require_once "../Model/2-TodoList.php";
require_once "../BusinessLogic/4-AddTodoList.php";
require_once "../BusinessLogic/3-ShowTodoList.php";
require_once "../BusinessLogic/5-RemoveTodoList.php";


addTodoList("Sanas");
addTodoList("Febriyan");
addTodoList("Akmal");
addTodoList("Ardi");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();