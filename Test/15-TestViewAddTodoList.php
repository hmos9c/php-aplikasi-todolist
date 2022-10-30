<?php

require_once "../View/7-ViewAddTodoList.php";
require_once "../BusinessLogic/2-ShowTodoList.php";
require_once "../BusinessLogic/4-AddTodoList.php";

addTodoList("Sanas");
addTodoList("Febriyan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();