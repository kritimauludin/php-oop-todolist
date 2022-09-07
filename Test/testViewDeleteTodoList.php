<?php

require_once "../View/viewDeleteTodoList.php";
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../View/viewShowTodoList.php";

addTodoList("Kriti");
addTodoList("mauludin");
addTodoList("ocumps");

showTodoList();

viewDeleteTodoList();

showTodoList();
