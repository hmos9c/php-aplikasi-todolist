<?php

require_once "../Model/2-TodoList.php";
require_once "../BusinessLogic/4-AddTodoList.php";


addTodoList("Sanas");
addTodoList("Febriyan");

var_dump($todoList);
