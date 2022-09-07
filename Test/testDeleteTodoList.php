<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/deleteTodoList.php";

addTodoList("Kriti");
addTodoList("Mauludin");

showTodoList();

deleteTodoList(1);
showTodoList();

deleteTodoList(2);
