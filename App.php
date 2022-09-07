<?php
require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/addTodoList.php";
require_once __DIR__ . "/BusinessLogic/deleteTodoList.php";
require_once __DIR__ . "/BusinessLogic/showTodoList.php";
require_once __DIR__ . "/View/viewAddTodoList.php";
require_once __DIR__ . "/View/viewDeleteTodoList.php";
require_once __DIR__ . "/View/viewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();
