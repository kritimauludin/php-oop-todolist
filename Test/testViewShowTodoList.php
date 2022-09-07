<?php
require_once "../View/viewShowTodoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList("Kriti");
addTodoList("Mauludin");
viewShowTodoList();
