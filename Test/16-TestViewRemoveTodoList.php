<?php

require_once "../Model/2-TodoList.php";
require_once "../View/8-ViewRemoveTodoList.php";
require_once "../BusinessLogic/4-AddTodoList.php";
require_once "../BusinessLogic/3-ShowTodoList.php";

addTodoList("Sanas");
addTodoList("Febriyan");
addTodoList("hmos9c");
addTodoList("Akmal");
addTodoList("Ardi");

showTodoList();

viewRemoveTodoList();

showTodoList();