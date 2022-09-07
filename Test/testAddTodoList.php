<?php
require_once "../Model/todoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList("Kriti");
addTodoList("Mauludin");

var_dump($todoList);
